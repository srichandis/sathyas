<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="font-family: 'Plus Jakarta Sans', sans-serif; background: #f7f2e8; padding: 24px;">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; border-radius: 12px; border: 1px solid #e2d4bf; overflow: hidden;">
        <div style="background: #721c1c; padding: 24px; text-align: center; border-bottom: 2px solid #d4af37;">
            <h1 style="color: #fff; font-family: 'Playfair Display', serif; margin: 0; font-size: 24px;">New Catering Enquiry</h1>
            <p style="color: #f5d77f; margin: 4px 0 0; font-size: 12px;">#SRI-{{ $enquiry->id }}</p>
        </div>
        <div style="padding: 24px;">
            <table style="width: 100%; border-collapse: collapse; font-size: 14px;">
                <tr><td style="padding: 8px 0; color: #888; width: 120px;">Name</td><td style="padding: 8px 0; font-weight: 600;">{{ $enquiry->user_name }}</td></tr>
                <tr><td style="padding: 8px 0; color: #888;">Email</td><td style="padding: 8px 0;">{{ $enquiry->user_email }}</td></tr>
                <tr><td style="padding: 8px 0; color: #888;">Phone</td><td style="padding: 8px 0;">{{ $enquiry->phone }}</td></tr>
                <tr><td style="padding: 8px 0; color: #888;">Event Type</td><td style="padding: 8px 0; font-weight: 600;">{{ $enquiry->event_type }}</td></tr>
                <tr><td style="padding: 8px 0; color: #888;">Event Date</td><td style="padding: 8px 0;">{{ $enquiry->event_date->format('d M Y') }}</td></tr>
                <tr><td style="padding: 8px 0; color: #888;">Guests</td><td style="padding: 8px 0;">{{ number_format($enquiry->guest_count) }}</td></tr>
                <tr><td style="padding: 8px 0; color: #888;">Meal Types</td><td style="padding: 8px 0;">{{ implode(', ', $enquiry->meal_types ?? []) }}</td></tr>
                <tr><td style="padding: 8px 0; color: #888;">Est. Price</td><td style="padding: 8px 0; font-weight: 700; color: #721c1c;">₹{{ number_format($enquiry->estimated_price) }}</td></tr>
            </table>
            @if($enquiry->special_instructions)
            <div style="margin-top: 16px; padding: 12px; background: #f7f2e8; border-radius: 8px; font-size: 13px;">
                <strong style="color: #721c1c;">Instructions:</strong><br>{{ $enquiry->special_instructions }}
            </div>
            @endif
        </div>
        <div style="background: #f7f2e8; padding: 16px; text-align: center; font-size: 12px; color: #888;">
            SATHYAS CATERING
        </div>
    </div>
</body>
</html>
