<?php

namespace App\Http\Controllers;

use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Application;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    //
    public function send($id)
    {
        //Logic will go here
        $project = Project::find($id);
        $user = $project->user->email;
        $appUser=User::where('id',Auth::user()->id)->first();


        $project->applications()->attach($appUser->id);

        Mail::to($user)->send(new Application);


        return redirect()->back()->with('message', 'Your application has been sent!');


    }
}
