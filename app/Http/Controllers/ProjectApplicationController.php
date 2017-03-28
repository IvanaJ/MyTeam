<?php

namespace App\Http\Controllers;

use App\Mail\acceptApplication;
use App\Project;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Application;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\rejectApplication;

class ProjectApplicationController extends Controller
{
    public function apply($id)
    {
        //Logic will go here
        $project = Project::find($id);
        $user = $project->user->email;

        $appUser = User::where('id', Auth::user()->id)->first();


        $project->applications()->attach($appUser->id);
        $this->sendMailToProjectOwner($user);
        return redirect()->back()->with('message', 'Your application has been sent!');
    }


    public function accept($id)
    {
        $user = User::find($id);
        $this->acceptApplicatorMail($user->email);

        return redirect()->back()->with('message', 'The application has been accepted!');
    }

    public function reject($id)
    {
        $user = User::find($id);
        $this->rejectApplicatorMail($user->email);
        DB::table('project_user')->where('user_id', $id)->delete();

        return redirect()->back()->with('message', 'The application has been rejected!');
    }


    //Emails
    public function sendMailToProjectOwner($user)
    {
        Mail::to($user)->send(new Application);
    }

    public function acceptApplicatorMail($user)
    {
        Mail::to($user)->send(new acceptApplication);
    }

    public function rejectApplicatorMail($user)
    {
        Mail::to($user)->send(new rejectApplication);
    }


}
