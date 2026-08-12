<?php

namespace App\Http\Controllers;

use App\Models\CateringEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $enquiries = CateringEnquiry::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->get();

        return view('dashboard.index', compact('enquiries'));
    }
}
