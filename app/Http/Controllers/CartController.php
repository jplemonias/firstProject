<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function goCart()
    {
        // return "Panier";
        return view("cart");
    }
}
