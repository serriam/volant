<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Auth;

class GmailSend extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */

    public $_name;
    public $_time;
    public $_price;

    public function __construct($name, $time, $price)
    {
       $this->_name = $name;
       $this->_time = $time;
       $this->_price = $price;
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->_name);

        return $this->from('morrisonmburu7@gmail.com', 'Morris Mburu')
            ->subject('Do not reply, Volant Couriers')
            ->markdown('backend.mails')
            ->with([
                'name' =>  Auth::user()->name,
                'title' => $this->_name,
                'time' =>  $this->_time,
                'price' =>  $this->_price,
                'link' => 'http://www.volantcourier.com'
            ]);
    }
}
