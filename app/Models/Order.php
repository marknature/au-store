<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    public function orderItems(){
        return $this->hasMany(OrderItem::class);
    }
    /*public function shippingAddress(){
        return $this->belongsTo(ShippingAddress::class);
    }*/
    public function payment(){
        return $this->hasOne(Payment::class);
    }
    public function product(){
        return $this->hasMany(Product::class);
    }
    public function cart(){
        return $this->hasOne(Cart::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
