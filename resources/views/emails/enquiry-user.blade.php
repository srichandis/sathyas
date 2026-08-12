<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body style="font-family: 'Plus Jakarta Sans', sans-serif; background: #f7f2e8; padding: 24px;">
    <div style="max-width: 600px; margin: 0 auto; background: #fff; border-radius: 12px; border: 1px solid #e2d4bf; overflow: hidden;">
        <div style="background: #721c1c; padding: 24px; text-align: center; border-bottom: 2px solid #d4af37;">
            <h1 style="color: #fff; font-family: 'Playfair Display', serif; margin: 0; font-size: 24px;">Thank You, {{ $enquiry->user_name }}!</h1>
        </div>
        <div style="padding: 24px;">
            <p style="font-size: 15px; line-height: 1.6;">We've received your catering enquiry <strong style="color: #721c1c;">#SRI-{{ $enquiry->id }}</strong> for your {{ $enquiry->event_type }}.</p>
            <div style="margin: 20px 0; padding: 16px; background: #f7f2e8; border-radius: 8px; border-left: 3px solid #d4af37;">
                <p style="margin: 0 0 8px; font-size: 14px;"><strong>Event:</strong> {{ $enquiry->event_type }}</p>
                <p style="margin: 0 0 8px; font-size: 14px;"><strong>Date:</strong> {{ $enquiry->event_date->format('l, d F Y') }}</p>
                <p style="margin: 0 0 8px; font-size: 14px;"><strong>Guests:</strong> {{ number_format($enquiry->guest_count) }}</p>
                <p style="margin: 0; font-size: 14px;"><strong>Estimated:</strong> ₹{{ number_format($enquiry->estimated_price) }}</p>
            </div>
            <p style="font-size: 14px; line-height: 1.6;">Our team will review your requirements and send a detailed quotation within <strong>2 hours</strong>.</p>
            <p style="font-size: 14px; line-height: 1.6;">For urgent enquiries, please call us at <strong style="color: #721c1c;">+91 9742985143</strong>.</p>
        </div>
        <div style="background: #f7f2e8; padding: 16px; text-align: center; font-size: 12px; color: #888;">
            SATHYAS CATERING
        </div>
    </div>
</body>
</html>
