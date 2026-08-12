<?php

namespace App\Http\Controllers;

use App\Models\CateringEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $enquiries = CateringEnquiry::orderBy('created_at', 'desc')->get();
        $pendingCount = $enquiries->where('status', 'Pending Review')->count();
        $totalCount = $enquiries->count();

        return view('admin.dashboard', compact('enquiries', 'pendingCount', 'totalCount'));
    }

    public function destroy(CateringEnquiry $enquiry)
    {
        $enquiry->delete();

        return redirect()->route('admin.dashboard')
            ->with('success', 'Enquiry #SRI-' . $enquiry->id . ' has been deleted.');
    }
}
