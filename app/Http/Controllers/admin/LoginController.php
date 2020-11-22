<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
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
    protected $redirectTo = 'admin/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin_auth.login');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    // public function logout(Request $request) 
    // {
    //     header("cache-Control: no-store, no-cache, must-revalidate");
    //     header("cache-Control: post-check=0, pre-check=0", false);
    //     header("Pragma: no-cache");
    //     header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
    //     Session::flush();
    //     $request->session()->regenerate();
    //     Session::flash('succ_message', 'Logged out Successfully');
    //     return redirect('/');
    // }
}
