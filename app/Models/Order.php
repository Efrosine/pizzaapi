<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id',
        'order_date',
        'status',
        'total_price',
    ];

    // Relasi ke OrderDetail
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
