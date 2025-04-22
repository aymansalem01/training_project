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

    protected $guarded = [];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];


    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
    public function wishlist()
    {
        return $this->belongsToMany(Item::class, 'wishlists')->withTimestamps();
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function payment_info()
    {
        return $this->hasMany(Payment::class);
    }
    public function shipp()
    {
        return $this->hasMany(Shipp::class);
    }
    public function items()
    {
        return $this->belongsToMany(Item::class, 'wishlists');
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }
}
