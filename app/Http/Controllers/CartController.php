<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function goCard()
    {
        return "Panier";
        /*view('user.profile', [
            'user' => Controller::findOrFail($id)
        ]);*/
    }
}
