<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
use Hash;


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
        $this->middleware('guest')->except('logout');
    }

    public function postLogin(Request $request)
    {
     $this->validate($request, [
         'email' => 'required',
         'password' => 'required',
     ]);
    if (\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
        $usuarioactual=\Auth::user();
        // dd("dooooooo");
        return redirect('/administrador');
     }
     return redirect('/login');
     }

    public function iniciarUsuarioAdmin(){
        $user = new User();
        $user->name="Andrey Torres Vega";
        $user->email = "admin@admin.com";
        // $user->user="admin";
        // $user->idrol = 1;
        $user->password = Hash::make('admin');
        // $user->state=1;
        $user->save();
        }//fin de iniciarUsuarioAdmin

   
}
