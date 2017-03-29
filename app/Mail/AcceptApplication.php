<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\User;

class AcceptApplication extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $project, $projectOwner)
    {
        $this->user = $user;
        $this->project = $project;
        $this->projectOwner = $projectOwner;


    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.accept', ['user' => $this->user, 'project' => $this->project, 'projectOwner' => $this->projectOwner]);
    }
}
