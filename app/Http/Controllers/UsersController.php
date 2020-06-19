<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\User;
class UsersController extends Controller
{
    public function index()
    {
    	return view ('users.index');
    }
    public function store(Request $request)
    {
    	
    	$this->validate($request, [
    		'name'     => 'required',
    		'email'    => 'required',
    		'phone'    => 'required',
    		'password' => 'required',
    	]);

    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->phone = $request->input('phone');
    	//$user->email_verified_at= $mail_verified_at;
    	$user->password = Hash::make($request->password);
    	$user->save();
    	return redirect('/')->with('info','enregister avec success');

    }
    public function list()
    {
    	$users = User::all();
    	
    	return view('users.show', compact('users'));
    }
}
