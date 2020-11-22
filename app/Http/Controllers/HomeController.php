<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\report;
use DB;

class HomeController extends Controller
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $req)
    {

        return view('client.reporting');
    }

    public function getuserreports(Request $req)
    {
        //dd($req->cell);
        $user = Auth::user()->id;

        $check = report::select('id')->where('user_id',$user)->orderBy('id','Desc')->first();
        
        if($req->cell == null)
        {
            $req->cell = 0;
        }

        if($req->cell < $check->id)
        {

            //$report = report::with('priority','camera','admin','store','user','incident')->where('user_id',$user)->get();

            $report = DB::table('reports')
                    ->join('priorities','reports.priority_id','=','priorities.id')
                    ->join('stores','reports.store_id','=','stores.id')
                    ->join('users','reports.user_id','=','users.id')
                    ->join('cameras','reports.camera_id','=','cameras.id')
                    ->join('incidents','reports.incident_id','=','incidents.id')
                    ->select('reports.id','users.name as username','cameras.camera_name','stores.store_name','incidents.incident_name','priorities.priority_level','reports.time','reports.date','reports.status')->where('reports.id','>',$req->cell)->where('reports.user_id',$user)->orderBy('id','Desc')->get();

            $final = array();

            array_push($final, $report, $check);
            
            return json_encode($final);
        
        }
        else 
        {
            return 'null';
        }
        
    }

   
}   

