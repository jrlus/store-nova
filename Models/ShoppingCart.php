<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;
    protected $fillable=
        ['status',
        'user_id',
        'order_date',];

    public function shhopping_cart_details(){
        return $this->hasMany(ShoppingCartDetail::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
