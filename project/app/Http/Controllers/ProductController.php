<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function showProduct()
    {
        // product list
        $listProduct = [
            [
                'id' => 1,
                'name' => 'iphone1'
            ],
            [
                'id' => 2,
                'name' => 'iphone2'
            ]
        ];
        return view('list-product', compact('listProduct'));
    }
    function getProduct($id)
    {
        echo $id;
    }
    // function getProduct($id, $name) phải có name
    // {
    //     echo $id;
    // }

    // function getProduct($id, $name = '') mặc định name ko có
    // {
    //     echo $id;
    // }

    function updateProduct(Request $request)
    {
        echo $request->id;
        echo $request->name;
    }
}
