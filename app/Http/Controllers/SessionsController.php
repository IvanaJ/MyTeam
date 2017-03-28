<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest',['except'=>'destroy']);
    }

    public function create()
    {
        return view('sessions.create');
    }


    public function store()
    {
        //attempt to authenticate the user if true automatically sign in
        //if so, sign them in
        if (!Auth::attempt(request(['email', 'password']))) {
            //if not redirect back
            return back()->withErrors([
                'message' => "Please check your credentials and try again"
            ]);
        }

        return redirect('/');

    }

    public function destroy()
    {
        auth()->logout();
        return redirect('/');


    }
}
