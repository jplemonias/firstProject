<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function goListe()
    {
        return "Liste des produits";
    }
        /**
         * TXT.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  string  $id
         * @return \Illuminate\Http\Response
         */
    public function goProductInfo($id)
    {
        return "Fiche du produit ".$id;
    }
}
?>