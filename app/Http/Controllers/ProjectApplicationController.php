<?php

namespace App\Http\Controllers;

use App\Mail\AcceptApplication;
use App\Project;
use App\SendEmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\Application;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\RejectApplication;

class ProjectApplicationController extends Controller
{
    use SendEmail;

    public function apply($id)
    {
        $project = Project::find($id);
        $user = $project->user->email;
        $appUser = User::where('id', Auth::user()->id)->first();
        $project->applications()->attach($appUser->id);
        $this->sendMailToProjectOwner($user);
        return redirect()->back()->with('message', 'Your application has been sent!');
    }

    public function accept($id, $project)
    {
        $owner = Project::find($project)->user_id;
        $projectOwner = User::find($owner)->name;
//        dd($user);
        $project = Project::find($project)->title;
//        dd($project);
        $user = User::find($id);
        $this->acceptApplicatorMail($user->email, $project, $projectOwner);

        return redirect()->back()->with('message', 'The application has been accepted!');
    }

    public function reject($id, $project)
    {
        $owner = Project::find($project)->user_id;
        $projectOwner = User::find($owner)->name;
        $project = Project::find($project)->title;
        $user = User::find($id);
        $this->rejectApplicatorMail($user->email, $project, $projectOwner);

        DB::table('project_user')->where('user_id', $id)->delete();

        return redirect()->back()->with('message', 'The application has been rejected!');
    }


}
