<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\WelcomeMail;
use App\Mail\WelcomeAdminMail;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\city;
use App\state;
use App\country;
use App\Admin;
use DB;

class adminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void 
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {
        return redirect('/admin/new-report'); 
    }

    public function newUser()
    {
        $cities = city::get();
        $countries = country::get();
        $states = state::get();

        return view('admin/new-user',['cities'=>$cities,'countries'=>$countries,'states'=>$states]);
    }

    public function addNewUser(Request $req)
    {
        $user = new User;
        $user->role_id = 2;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->city_id = $req->city_id;
        $user->state_id = $req->state_id; 
        $user->country_id = $req->country_id;
        $user->save();

        $result = DB::table('users')
                    ->join('cities','users.city_id','=','cities.id')
                    ->join('states','users.state_id','=','states.id')
                    ->join('countries','users.country_id','=','countries.id')
                    ->select('users.id','users.name as username','users.phone','users.address','cities.city_name','states.state_name','countries.country_name')->orderBy('id','Desc')->first();

        Mail::to($req->email)->send(new WelcomeMail($req->name));

        return json_encode($result);
        
    }

    public function showUser()
    {
        $result = DB::table('users')
                    ->join('cities','users.city_id','=','cities.id')
                    ->join('states','users.state_id','=','states.id')
                    ->join('countries','users.country_id','=','countries.id')
                    ->select('users.id','users.name as username','users.phone','users.address','cities.city_name','states.state_name','countries.country_name')->orderBy('id','Desc')->get();

        return json_encode($result);
    }

    
    // ADMIN FUNCTIONS

    public function newadmin(Request $req)
    {
        return view('admin/create-admin');
    }

    public function addNewAdmin(Request $req)
    {
        $admin = new Admin;
        $admin->role_id = $req->role_id;
        $admin->name = $req->name;
        $admin->email = $req->email;
        $admin->password = Hash::make($req->password);
        
        $admin->save();

        Mail::to($req->email)->send(new WelcomeAdminMail($req->name));

        $result = DB::table('admins')
                    ->join('roles','admins.role_id','=','roles.id')
                    ->select('admins.id','roles.role_name','admins.name as adminname','admins.email')->orderBy('id','Desc')->first();

        return json_encode($result);
        
    }

    public function showAdmin()
    {
        $result = DB::table('admins')
                    ->join('roles','admins.role_id','=','roles.id')
                    ->select('admins.id','roles.role_name','admins.name as adminname','admins.email')->orderBy('id','Desc')->get();

        return json_encode($result);
    }
}
