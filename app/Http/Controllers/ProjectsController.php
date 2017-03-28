<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddProjectFormRequest;
use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    //

    public function index()
    {
        $projects = Project::latest();

        return view('projects.index', compact('projects'));
    }

    public function show()
    {
        $projects = Project::allProjects();


        return view('projects.show', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(AddProjectFormRequest $request)
    {
        $request->persist();
        return redirect('/');
    }
}
