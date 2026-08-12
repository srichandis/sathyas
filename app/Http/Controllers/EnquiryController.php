<?php

namespace App\Http\Controllers;

use App\Mail\EnquiryAdminNotification;
use App\Mail\EnquiryUserNotification;
use App\Models\CateringEnquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function create()
    {
        return view('enquiry.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email',
            'phone' => 'required|string|max:20',
            'event_type' => 'required|string',
            'event_date' => 'required|date|after:today',
            'event_location' => 'nullable|string|max:500',
            'guest_count' => 'required|integer|min:20|max:10000',
            'meal_types' => 'required|array',
            'meal_types.*' => 'string',
            'selected_dishes' => 'nullable|array',
            'selected_dishes.*' => 'string',
            'special_instructions' => 'nullable|string|max:2000',
        ]);

        // Calculate estimated price
        $baseRatePerPlate = match ($validated['event_type']) {
            'Wedding', 'Weddings' => 450,
            'Upanayanam' => 380,
            'Religious Function', 'Religious Functions' => 320,
            'Housewarming', 'Family Celebrations' => 350,
            default => 300,
        };

        $mealMultiplier = count($validated['meal_types']) * 0.75 + 0.25;
        $totalEstimated = (int) round($baseRatePerPlate * $validated['guest_count'] * $mealMultiplier);

        $enquiry = CateringEnquiry::create([
            'user_id' => Auth::id(),
            'user_name' => $validated['user_name'],
            'user_email' => $validated['user_email'],
            'phone' => $validated['phone'],
            'event_type' => $validated['event_type'],
            'event_date' => $validated['event_date'],
            'event_location' => $validated['event_location'] ?? '',
            'guest_count' => $validated['guest_count'],
            'meal_types' => $validated['meal_types'],
            'selected_dishes' => $validated['selected_dishes'] ?? [],
            'special_instructions' => $validated['special_instructions'] ?? '',
            'estimated_price' => $totalEstimated,
            'status' => 'Pending Review',
        ]);

        // Send email notification to admin
        try {
            Mail::to(config('mail.admin_address'))->send(new EnquiryAdminNotification($enquiry));
        } catch (\Exception $e) {
            // Log email error but don't block the submission
            \Illuminate\Support\Facades\Log::error('Failed to send admin notification: ' . $e->getMessage());
        }

        // Send confirmation email to the user
        try {
            Mail::to($enquiry->user_email)->send(new EnquiryUserNotification($enquiry));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error('Failed to send user notification: ' . $e->getMessage());
        }

        return redirect()->route('home')
            ->with('success', 'Your catering enquiry #SRI-' . $enquiry->id . ' has been submitted successfully! Our team will contact you within 2 hours.');
    }

    public function show(CateringEnquiry $enquiry)
    {
        if (Auth::id() !== $enquiry->user_id && !Auth::user()?->isAdmin()) {
            abort(403);
        }

        return view('enquiry.show', compact('enquiry'));
    }

    public function destroy(CateringEnquiry $enquiry)
    {
        // Only allow the owner or an admin to delete
        if (Auth::id() !== $enquiry->user_id && !Auth::user()?->isAdmin()) {
            abort(403);
        }

        $enquiry->delete();

        return redirect()->back()
            ->with('success', 'Enquiry #SRI-' . $enquiry->id . ' has been deleted.');
    }
}
