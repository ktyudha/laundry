<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Promo;
use App\Models\Carousel;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LandingController extends Controller
{
    public function index()
    {
        // $paket = Paket::id();
        $categories = Category::all();
        $carousels = Carousel::all();
        $promos = Promo::all();
        return view('home', compact('categories', 'carousels', 'promos'));
    }
}
