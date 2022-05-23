<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Support extends Mailable
{
    use Queueable, SerializesModels;


    public $subject, $data, $sender;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($subject, $data, $sender)
    {
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
        return $this->to('emailsenderdebugger@gmail.com', 'Cobra iTech Services Corporation')
            ->from($this->sender)
            ->markdown('mail.support')
            ->subject($this->subject)
            ->with('data', $this->data);
    }
}
