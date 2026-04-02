<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //

    public function index()
    {
        return 'Hello on ProductController';
    }

    public function slug($slug)
    {
        return 'This is '. $slug . ' product page';
    }
};