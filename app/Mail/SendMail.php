<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
   
    public function __construct($data)
    {
        $this->data = $data;
    }

   
    public function build()
    {
        if($this->data['datafrom'] == 'contact')
        {
            return $this->from($this->data['email'])->subject('New Equiry')->view('frontend.mail')->with('data', $this->data);
        }else if($this->data['datafrom'] == 'requestcallback')
        {
            return $this->from($this->data['email'])->subject('New Request Call Back')->view('frontend.mail')->with('data', $this->data);
        }else
        {
            return $this->from($this->data['email'])->subject('New Quote Request')->view('frontend.mail')->with('data', $this->data);
        }
        
    }
}

?>
