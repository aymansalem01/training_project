<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function items()
    {
        return $this->belongsToMany(Item::class,'cart_items'
            )->withPivot('quantity');
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
