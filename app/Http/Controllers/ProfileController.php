<?php

namespace App\Http\Controllers;
 
use App\report;
use App\store;
use App\req;
use App\admin;
use App\User;
use App\city;
use App\state;
use App\country;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller 
{
    
    //
    public function index()
    {
        $info = admin::with('role')->where('id',Auth::user()->id)->first();
        $reports = DB::table('reports')->where('admin_id',Auth::user()->id)->count();
        $requests =  DB::table('reqs')->where('admin_id',Auth::user()->id)->count();
        $reports_tot = DB::table('reports')->count();
        $requests_tot =  DB::table('reqs')->count();
        $rep_perc = 0;
        $req_perc = 0;
        

        if($reports != 0)
        {
          $rep_perc = substr(($reports/$reports_tot)*100,0,5);
        }

        if($requests != 0)
        {
          $req_perc = substr(($requests/$requests_tot)*100,0,5);
        }

        //echo $rep_perc ;
        return view('admin/profile',['info'=>$info,'reports'=>$reports,'requests'=>$requests,'rep_perc'=>$rep_perc,'req_perc'=>$req_perc]);
    }

    public function edit(Request $req)
    {
      $result = DB::table('admins')->where('id',Auth::user()->id)->update(['name'=>$req->name,'email'=>$req->email]);
      
      if($result > 0)
      {
          return back()->with('success','Info Stored Successfully');
      }
      else
      {
          return back()->with('error','Data not stored, check internet connection or contact your service provider');
      }
      
    }

    public function reset_password(Request $req)
    {

      $result = DB::table('admins')->select('password')->where('id',Auth::user()->id)->first();
    
      if (Hash::check($req->old_pass, $result->password))
      {
        $password = bcrypt($req->new_pass);
        $result1 = DB::table('admins')->where('id',Auth::user()->id)->update(['password'=>$password]);
        return back()->with('success','Password Successfully Updated');
      }
      else
      {
          return back()->with('error','Your old password was incorrect');
      }
    }


    
    
    

    // ==================================== USER FUNCTIONS ==================================================

    public function userindex()
    {
        $info = User::with('city','state','country')->where('id',Auth::user()->id)->first();
        $reports = DB::table('reports')->where('user_id',Auth::user()->id)->count();
        $requests =  DB::table('reqs')->where('user_id',Auth::user()->id)->count();
        $stores = DB::table('stores')->where('user_id',Auth::user()->id)->count();
        $cities = city::get();
        $states = state::get();

        return view('client/user-profile',['info'=>$info,'reports'=>$reports,'requests'=>$requests,'stores'=>$stores,'cities'=>$cities,'states'=>$states]);
    }

    public function user_edit(Request $req)
    {
      //dd($req->all());
      $result = DB::table('users')->where('id',Auth::user()->id)->update(['name'=>$req->name,'email'=>$req->email, 'phone'=>$req->phone,'address'=>$req->address,'city_id'=>$req->city,'state_id'=>$req->state]);
      
      if($result > 0)
      {
          return back()->with('success','Info Stored Successfully');
      }
      else
      {
          return back()->with('error','Data not stored, check internet connection or contact your service provider');
      }
      
    }




    public function user_reset_password(Request $req)
    {

      $result = DB::table('users')->select('password')->where('id',Auth::user()->id)->first();
    
      if (Hash::check($req->old_pass, $result->password))
      {
        $password = bcrypt($req->new_pass);
        $result1 = DB::table('users')->where('id',Auth::user()->id)->update(['password'=>$password]);
        return back()->with('success','Password Successfully Updated');
      }
      else
      {
          return back()->with('error','Your old password was incorrect');
      }
    }


}
