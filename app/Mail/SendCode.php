<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SendCode extends Mailable
{
    use Queueable, SerializesModels;

    public $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($code)
    {
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
           /// $user = Auth::user();
        

        //return $this->from('fbanseing@gmail.com');
        return $this->subject('votre code est : 1234')->view('dashboard');
       // ->from('fbanseing@gmail.com');
       // ->markdown('acceuil');
         // return back()->with(['message' => 'Email successfully sent!']);
    }
}
