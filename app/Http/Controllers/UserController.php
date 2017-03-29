<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        return view('projects.my-projects', compact('user'));
    }

    public function show(Project $project)
    {
        $number=$project->applications->count();
        return view('projects.show-my-projects', compact('project','number'));
    }


}
