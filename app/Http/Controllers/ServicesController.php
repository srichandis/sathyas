<?php

namespace App\Http\Controllers;

use App\Models\MenuItem;

class ServicesController extends Controller
{
    public function index()
    {
        $signatureDishes = MenuItem::where('image', '!=', '')->get();

        return view('services.index', compact('signatureDishes'));
    }
}
