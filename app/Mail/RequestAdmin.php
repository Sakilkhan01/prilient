<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestAdmin extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->data = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $from_email  = config('mail.from_email');
        $subject = 'Request a Quote';
        $title = 'Prilient Information Technologies';
        
        return $this->view('mail.request_admin')
                    ->from($from_email,$title)
                    ->subject($subject)
                    ->with('user_list',$this->data);
    }
}
