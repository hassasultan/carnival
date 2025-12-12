<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Blogs extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['user_id','category_id','title', 'slug', 'image', 'description', 'status', 'region_id',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value, '-');
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
}
