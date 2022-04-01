<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return view('productos.productos');
    }
    public function createproduct()
    {
        return view('productos.create');
    }
}
