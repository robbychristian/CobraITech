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
    public $sender;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($filename, $subject, $data, $sender)
    {
        $this->filename = $filename;
        $this->subject = $subject;
        $this->data = $data;
        $this->sender = $sender;
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
        return $this->to($this->sender)->from('emailsenderdebugger@gmail.com', 'Cobra iTech Services Corporation')->subject($this->subject)->markdown('emails.application')->with('data', $this->data)->with('pdf', $this->filename);
    }
}
