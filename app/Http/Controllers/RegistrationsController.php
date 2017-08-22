<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationsController extends Controller
{
    public function create() {
    	return view('sessions.create');
    }

    public function store() {
    	$this->validate(request(), [
    		'user_name => required',
		    'password => required|confirmed',
		    'email => required|unique:users|email'
	    ]);

    	$user = User::create(request(['user_name', 'password', 'email']));

	    auth()->login( $user );

	    return redirect()->home();
    }
}
