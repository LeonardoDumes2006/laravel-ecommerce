<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        $name = 'Leo';
        $products = [
            'camisa', 'celular', 'computador'
        ];

        return view('home',[
            'name' => $name,
            'products' => $products
        ]);
    }
}
