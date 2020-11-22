<?php

namespace App\Http\Controllers;
use App\report;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PrintController extends Controller
{
    //
    

    public function index()
    {
    	$reports = report::with('user','store')->orderBy('id','desc')->get();
    	//echo $reports;
    	return view('admin/print',['reports' => $reports]);	
    }

    public function fetchprints($id)
    {	
      	$values = array_map('intval',explode(',',$id));
      	$count = count($values);
    	
      	if($count > 0)
      	{
      		$result = DB::table('reports')
                  ->join('users','reports.user_id','users.id')
                  ->join('cameras','reports.camera_id','cameras.id')
                  ->join('admins','reports.admin_id','admins.id')
                  ->join('priorities','reports.priority_id','priorities.id')
                  ->join('incidents','reports.incident_id','incidents.id')
                  ->join('stores','reports.store_id','stores.id')
                  ->join('cities','stores.city_id','cities.id')
                  ->join('states','stores.state_id','states.id')
                  ->join('countries','stores.country_id','countries.id')
                  ->select('reports.id','reports.description','reports.status','reports.time','reports.date','reports.document','users.name as username','stores.store_name','stores.address','incidents.incident_name','cameras.camera_name','priorities.priority_level','admins.name as adminname','cities.city_name','states.state_name','countries.country_name')->whereIn('reports.id',$values)->get();

      		return json_encode($result);
      	}
      	else
      	{
      		echo "No rows selected";
      	}
    	

        
    }


    // ===================================================================================================================
    // =============================================== USER FUNCTION =====================================================
    // ===================================================================================================================

    public function userindex()
    {

      $user = Auth::user()->id;

      $reports = report::with('user','store')->orderBy('id','desc')->where('reports.user_id',$user)->get();
      
      return view('client/user-print',['reports' => $reports]); 
    }

    public function userfetchprints($id)
    { 
        $values = array_map('intval',explode(',',$id));
        $count = count($values);
      
        if($count > 0)
        {
          $result = DB::table('reports')
                  ->join('users','reports.user_id','users.id')
                  ->join('cameras','reports.camera_id','cameras.id')
                  ->join('admins','reports.admin_id','admins.id')
                  ->join('priorities','reports.priority_id','priorities.id')
                  ->join('incidents','reports.incident_id','incidents.id')
                  ->join('stores','reports.store_id','stores.id')
                  ->join('cities','stores.city_id','cities.id')
                  ->join('states','stores.state_id','states.id')
                  ->join('countries','stores.country_id','countries.id')
                  ->select('reports.id','reports.description','reports.status','reports.time','reports.date','reports.document','users.name as username','stores.store_name','stores.address','incidents.incident_name','cameras.camera_name','priorities.priority_level','admins.name as adminname','cities.city_name','states.state_name','countries.country_name')->whereIn('reports.id',$values)->get();

          return json_encode($result);
        }
        else
        {
          echo "No rows selected";
        }
      

        
    }

    
}
