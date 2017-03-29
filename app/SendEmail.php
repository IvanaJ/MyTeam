<?php

namespace App;
use Illuminate\Support\Facades\Mail;
use App\Mail\Application;
use App\Mail\AcceptApplication;
use App\Mail\RejectApplication;
trait SendEmail
{
    //Emails
    public function sendMailToProjectOwner($user)
    {
        Mail::to($user)->send(new Application);
    }

    public function acceptApplicatorMail($user, $project, $projectOwner)
    {
        Mail::to($user)->send(new AcceptApplication($user, $project, $projectOwner));
    }

    public function rejectApplicatorMail($user, $project, $projectOwner)
    {
        Mail::to($user)->send(new RejectApplication($user, $project, $projectOwner));
    }

}