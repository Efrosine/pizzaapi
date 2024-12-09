<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = ['name', 'description', 'price', 'image_url'];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
