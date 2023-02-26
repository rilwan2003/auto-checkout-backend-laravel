<?php
// app/Checkout.php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    protected $fillable = [
        'name', 'email', 'phone', 'address', 'product_id'
    ];

    public static function addCheckout($data)
    {
        return self::create($data);
    }
}
