<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookingNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $country;
    public $email;
    public $whatsappNumber;
    public $surfingExperience;
    public $visitDate;
    public $desiredBoard;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $country, $email, $whatsappNumber, $surfingExperience, $visitDate, $desiredBoard)
{
    $this->name = $name;
    $this->country = $country;
    $this->email = $email;
    $this->whatsappNumber = $whatsappNumber;
    $this->surfingExperience = $surfingExperience;
    $this->visitDate = $visitDate;
    $this->desiredBoard = $desiredBoard;
}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.booking-notification')
                    ->subject('New Booking Notification');
    }
}