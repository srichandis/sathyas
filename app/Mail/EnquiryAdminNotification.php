<?php

namespace App\Mail;

use App\Models\CateringEnquiry;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class EnquiryAdminNotification extends Mailable
{
    use Queueable, SerializesModels;

    public CateringEnquiry $enquiry;

    public function __construct(CateringEnquiry $enquiry)
    {
        $this->enquiry = $enquiry;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Catering Enquiry #SRI-' . $this->enquiry->id . ' Received',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.enquiry-admin',
        );
    }
}
