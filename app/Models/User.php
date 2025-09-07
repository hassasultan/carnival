<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'full_name',
        'email',
        'role_id',
        'carnival_id',
        'phone',
        'status',
        'address',
        'city',
        'state',
        'country',
        'zipcode',
        'password',
        'deleted_at',
        'image',
        'slug',
        'age',
        'nationality',
        'height',
        'weight',
        'bust',
        'hips',
        'waist',
        'age_range',
        'gender',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()
    {
        return $this->role->name === "Admin";
    }

    public function isVendor()
    {
        return $this->role->name === "Vendor";
    }

    public function customer()
    {
        return $this->role->name === "Customer";
    }

    public function isSubVendor()
    {
        return $this->role->name === "SubVendor";
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
    }

    public function hasPermission($permission)
    {
        if (!$this->role) {
            return false;
        }

        if (!$this->role->permissions) {
            return false;
        }

        return $this->role->permissions->pluck('name')->contains($permission);
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }

    public function subVendor()
    {
        return $this->hasOne(SubVendor::class);
    }
    public function products()
    {
        return $this->hasMany(Product::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blogs::class);
    }
    public function gallery()
    {
        return $this->hasMany(GalleryAlbum::class);
    }
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function carnivals()
    {
        return $this->hasMany(Carnival::class, 'head');
    }
    public function isCustomer()
    {
        return $this->hasOne(Customer::class);
    }
    public function banners()
    {
        return $this->hasMany(UserDetailBanner::class);
    }
    public function tabs()
    {
        return $this->hasMany(UserDetailTabs::class);
    }
    public function sponsors()
    {
        return $this->hasMany(Sponsers::class);
    }
    public function events()
    {
        return $this->hasMany(Event::class);
    }
    public function costumes()
    {
        return $this->hasMany(Costume::class);
    }

    public function accountDetail()
    {
        return $this->hasOne(UserAccountDetail::class);
    }

    public function getPackageNameAttribute()
    {
        return optional($this->vendor?->package)->title
            ?? optional($this->subVendor?->package)->title;
    }

    public function hasPackagePermission($permission)
    {
        if ($this->isAdmin()) {
            return true;
        }

        $package = $this->vendor->package ?? $this->subVendor->package ?? null;

        if (!$package || !$package->permissions) {
            return false;
        }

        return $package->permissions->pluck('name')->contains($permission);
    }
}
