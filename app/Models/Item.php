<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Item extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
     public function carts()
     {
        return $this->BelongsToMany(Cart_items::class,'cart_items')->withPivot('quantity');
     }
    public function image()
    {
        return $this->hasMany(Image::class);
    }
    public function item_user()
    {
        return $this->belongsToMany(User::class, 'wishlists')->withTimestamps();
    }
    public function review()
    {
        return $this->hasMany(Review::class);
    }
    public function users()
    {
        return $this->belongsToMany(User::class, 'wishlists');
    }
}
