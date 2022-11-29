<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function showCart()
    {
        return view('frontend.ecommerce.cart.cart-products');
    }
}
