<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
         //$this->middleware('guest')->except('logout');
    }

    public function getLogin(){
        
        return view('auth.login');
    }

    public function postLogin(Request $request){

        $name   = $request->name;
        $password = $request->password;

        $data = [
            'name'=>$name,
            'password'=>$password
        ];

        if(Auth::attempt($data)){
            return redirect('/home');

        }else{
            return back()->with('error', 'Erreur');
        }

    }

    public function getRegister(){
        return view('auth.register');
    }

    public function postRegister(Request $request){
        $name     =$request->name;
        $email    =$request->email;
        $phone    = $request->phone;
        $password = $request->password;

        $user = new User();
        $user->name=$name;
        $user->email=$email;
        $user->phone = $phone;
        $user->password = Hash::make($password);

        if($user->save()){
            return back()->with('succes', 'Succes');
        }else{
            return back()->with('error', 'Erreur');
        }

    }

    public  function getLogout()
    {
       
        Auth::logout();
        return redirect('login');
    }
}
