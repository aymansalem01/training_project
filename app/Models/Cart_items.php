<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart_items extends Model
{
    use HasFactory;

    protected $guarded = [];

    public  function cart()
    {
        return $this->belongsTo(Cart::class,'cart_id');
    }
    public function item()
    {
        return $this->belongsTo(Item::class,'item_id');
    }
}
