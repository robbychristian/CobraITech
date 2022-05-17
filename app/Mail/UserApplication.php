<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class UserApplication extends Mailable
{
    use Queueable, SerializesModels;

    public $filename;
    public $subject;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename, $subject, $data)
    {
        $this->filename = public_path() . '/' . $filename;
        $this->subject = $subject;
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // return $this->markdown('emails.application')
        //     ->subject($this->subject)
        //     ->attach($this->filename);
        return $this->from('numzy03@gmail.com', 'Cobra iTech Services Inc.')->subject($this->subject)->markdown('emails.application')->with('data', $this->data)->with('pdf', $this->filename);
    }
}
