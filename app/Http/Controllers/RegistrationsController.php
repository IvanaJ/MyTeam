<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    //

    public function create(){
        return view('registration.create');
    }

    public function store(RegistrationRequest $request){
        $request->persist();
        return redirect('/');

    }

}
