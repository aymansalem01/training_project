<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cart_item()
    {
        return $this->hasMany(Cart_items::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

}
