<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Permission extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
        'display_name',
        'description',
    ];

    public function roles()
    {
        // return $this->belongsToMany(Package::class, 'role_has_permissions');
            return $this->belongsToMany(Package::class, 'role_permissions');

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
