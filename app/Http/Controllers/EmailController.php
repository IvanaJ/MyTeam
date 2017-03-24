<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Application;
use Illuminate\Support\Facades\Redirect;

class EmailController extends Controller
{
    //
    public function send($id)
    {
        //Logic will go here
        $project = Project::find($id);
        $user = $project->user->email;

        Mail::to($user)->send(new Application);
        return redirect()->back()->with('message', 'Your application has been sent!');


    }
}
