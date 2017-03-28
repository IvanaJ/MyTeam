<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class rejectApplication extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $project, $project_owner)
    {
        $this->user = $user;
        $this->project = $project;
        $this->project_owner = $project_owner;


    }
    /**
     * Build the message.
     *
     * @return $this
     */

    public function build()
    {
        return $this->markdown('emails.reject', ['user' => $this->user, 'project' => $this->project, 'project_owner' => $this->project_owner]);
    }

}
