<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function goListe()
    {
        // return "Liste des produits";
        return view("product-list");
    }
    public function goProductInfo($id)
    {
        // return "Fiche du produit ".$id;
        return view("product-details",  ['id' => $id]);
    }
}
?>