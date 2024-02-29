<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products');
    }

    public function showFirstCat()
    {
        return view('category.fnb');
    }

    public function showSecondCat()
    {
        return view('category.beauty');
    }

    public function showThirdCat()
    {
        return view('category.homecare');
    }

    public function showFourthCat()
    {
        return view('category.baby');
    }
}
