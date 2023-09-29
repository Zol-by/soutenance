<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    // fonction login utilisable hors api de laravel login

    // public function login(Request $request){

    //     return view('welcome');

    //     if(Auth::attempt(['identifiant' => $request-> $identifiant, 'password' => $request-> $password]))
    //         {
    //             return view('dashboard');
    //         }else{
    //             return view('welcome')->with('status', 'Identifiant ou mot de passe incorect');
    //         }

    // }

    // public function logaout(){
    //     Auth::logaout();
    //     return view('Auth.login');
    // }


}
