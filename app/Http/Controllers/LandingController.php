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
        // Article::with('user')->where('status', 'publish')->orderBy('updated_at', 'desc')->get();
        $categories = Category::all();
        $carousels = Carousel::all();
        $promos = Promo::where('status', 'publish')->orderBy('updated_at', 'desc')->limit('3')->get();
        $pakets = Paket::all();
        return view('home', compact('categories', 'carousels', 'promos','pakets'));
    }
}
