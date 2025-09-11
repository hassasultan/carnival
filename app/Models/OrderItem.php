<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id', // ids of product / events / costumes
        'quantity',
        'type', // to distinguish between product / events / costumes
        'price',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class, 'product_id');
    }

    public function music()
    {
        return $this->belongsTo(Music::class, 'product_id');
    }

    public function costume()
    {
        return $this->belongsTo(Costume::class, 'product_id');
    }

    public function getItemDetailsAttribute()
    {
        switch ($this->type) {
            case 'event':
                $event = $this->event;

                if ($event && !$event->relationLoaded('tickets')) {
                    $event->load('tickets');
                }

                return [
                    'title' => $event?->name,
                    'price' => $event && $event->tickets->isNotEmpty()
                        ? $event->tickets->sortBy('id')->first()->price
                        : 'FREE',
                    'image' => $event?->banner
                        ? asset('eventBanner/' . $event->banner)
                        : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg',
                ];
            case 'music':
                return [
                    'title' => $this->music?->real_name,
                    'price' => $this->music?->price ?? 0,
                    'image' => $this->music?->cover_image
                        ? asset('musicCovers/' . $this->music->cover_image)
                        : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg',
                ];
            case 'costume':
                return [
                    'title' => $this->costume?->title,
                    'price' => $this->costume?->new_price ?? 0,
                    'image' => $this->costume?->image ?? 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg',
                ];
            default: // product
                return [
                    'title' => $this->product?->title,
                    'price' => $this->product?->new_price ?? 0,
                    'image' => $this->product?->image
                        ? asset('productImage/' . $this->product->image)
                        : 'https://www.ncenet.com/wp-content/uploads/2020/04/No-image-found.jpg',
                ];
        }
    }
}
