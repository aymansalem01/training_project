<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $guarded = [];

        public function user()
        {
            return $this->belongsTo(User::class,'user_id');
        }
        public function item()
        {
            return $this->belongsTo(Item::class,'item_id');
        }
}
