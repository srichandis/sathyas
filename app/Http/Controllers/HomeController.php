<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        $signatureDishes = MenuItem::where('image', '!=', '')->get();
        $testimonials = Testimonial::all();

        return view('home.index', compact('signatureDishes', 'testimonials'));
    }
}
