<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ReplyToQuery extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data, $receiver, $subject;
    public function __construct($data, $receiver, $subject)
    {
        $this->data = $data;
        $this->receiver = $receiver;
        $this->subject = $subject;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->to($this->receiver)
            ->from('emailsenderdebugger@gmail.com', 'Cobra iTech Services Corporation')
            ->subject($this->subject)
            ->markdown('mail.reply-to-query')
            ->with('data', $this->data);
    }
}
