<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailSender extends Mailable
{
    use Queueable, SerializesModels;

    public $mail; 

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datas)
    {
        $this->mail =  $datas;
    }
    

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->mail->mail);

        return $this->from($this->mail->email)->view('template-email.monTemplate')->with(['mail'=>$this->mail]);
        // return $this->from('client@email.com')->view('template-email.monTemplate');
    }
}
