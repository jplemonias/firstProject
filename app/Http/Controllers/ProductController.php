<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function goListe()
    {
        return view("product-list");
    }

    public function goProductInfo(int $id)
    {
        return view("product-details",  ['id' => $id]);
    }
}
?>