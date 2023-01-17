<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class BookingRequest extends Mailable
{
    use Queueable, SerializesModels;
    public $booking;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($booking)
    {
        //
        $this->booking = $booking;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            
            subject: 'Booking Request',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'mail.booking-request',
            with: [
               'bookingprice'=>$this->booking->price, 
               'bookingemail'=>$this->booking->email, 
               'bookingphone'=>$this->booking->phone, 
               'bookingname'=>$this->booking->name, 
               'bookingcheck_out'=>$this->booking->check_out, 
               'bookingcheck_in'=>$this->booking->check_in, 
               'bookingroom_id'=>$this->booking->room_id, 
               'bookingnumber'=>$this->booking->number, 
               'bookingid'=>$this->booking->bookingid, 
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
