<?php

namespace App\Http\Controllers;
use App\report;
use App\camera;
use App\store;
use App\incident;
use App\priority;
use App\image;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class FilterController extends Controller
{
    //
   

    public function index()
    {

    	$incidents = incident::all();
        $priorities = priority::all();
        $users = User::all();
    	return view('/admin/filter',['users'=>$users, 'incidents'=> $incidents, 'priorities'=>$priorities]);
    }

    public function show()
    {
        //
        $report = report::with('priority','camera','admin','store','user','incident')->get();

        if($report)
        {
            return $report;
        }
        else
        {
            return 'null';
        }
        
    }

    public function getstore($id)
    {

        $store = store::select('id','store_name')->where('user_id',$id)->get();
        return json_encode($store);
    }
    
    public function getcamera($id)
    {
    	$values = array_map('intval',explode(',',$id));
 
    	$result = camera::select('id','camera_name')->whereIn('store_id',$values)->get();
    	
    	return json_encode($result);
    }

    public function filterrecords(Request $req)
    {
    	
    	//dd($from);
    	$query = DB::table('reports')
    			 ->join('cameras','reports.camera_id','=','cameras.id')
                 ->join('stores','stores.id','=','reports.store_id')
                 ->join('users','users.id','=','reports.user_id')
                 ->join('incidents','incidents.id','=','reports.incident_id')
                 ->join('priorities','priorities.id','=','reports.priority_id');

        if(null !== $req->input('picker1') && null == $req->input('picker2') )
        {

        	$from 	=	date("Y-m-d H:i:s", strtotime($req->input('picker1').'00:00:00'));
        	
        	$query->where('reports.created_at','>=',$from);
        	
        }

        if(null !== $req->input('picker1') && null !== $req->input('picker2') )
        {

        	$from 	=	date("Y-m-d H:i:s", strtotime($req->input('picker1').'00:00:00'));
    		$to 	=	date("Y-m-d H:i:s", strtotime($req->input('picker2').'23:59:59'));
        	
        	$query->where('reports.created_at','>=',$from)->where('reports.created_at','<=',$to);
        	
        }
        
    	//dd($query->get());

        if(null !== $req->input('user') && $req->input('user') !== 'Select Client')
        {
        	$query->where('reports.user_id',$req->input('user'));
        }
        if(null !== $req->input('store'))
        {
        	$query->whereIn('reports.store_id',$req->input('store'));
        	
        }
        if(null !== $req->input('camera'))
        {
        	$query->whereIn('reports.camera_id',$req->input('camera'));
        }
        if(null !== $req->input('incident'))
        {
        	$query->whereIn('reports.incident_id',$req->input('incident'));
        }
        if(null !== $req->input('priority'))
        {
        	$query->whereIn('reports.priority_id',$req->input('priority'));
        }
       

        // ->select('reports.id','users.name as username','stores.store_name','cameras.camera_name','incidents.incident_name','reports.time','reports.date','reports.status')->orderBy('id','Desc')->get();

        $result = $query->select('reports.id','users.name AS username','stores.store_name','cameras.camera_name','incidents.incident_name','priorities.priority_level','reports.time','reports.date','reports.status')->get();
       
       //dd($result);
        return json_encode($result);

    }



    // ==================================================================================================================
    // ============================================== USER FUNCTIONS ====================================================
    // ==================================================================================================================

    public function userindex()
    {
        $user = Auth::user()->id;

        $incidents = incident::all();
        $priorities = priority::all();
        $stores = store::where('user_id',$user)->get();

        return view('/client/user-filter',['stores'=>$stores,'incidents'=> $incidents, 'priorities'=>$priorities]);
    }

    public function usershow()
    {
        //
        $user = Auth::user()->id;

        $report = report::with('priority','camera','admin','store','user','incident')->where('user_id',$user)->get();

        if($report)
        {
            return $report;
        }
        else
        {
            return 'null';
        }
        
    }

    public function usergetcamera($id)
    {
        $values = array_map('intval',explode(',',$id));
 
        $result = camera::select('id','camera_name')->whereIn('store_id',$values)->get();
        
        return json_encode($result);
    }

    public function userfilterrecords(Request $req)
    {

        $user = Auth::user()->id;
        
        $query = DB::table('reports')
                 ->join('cameras','reports.camera_id','=','cameras.id')
                 ->join('stores','stores.id','=','reports.store_id')
                 ->join('users','users.id','=','reports.user_id')
                 ->join('incidents','incidents.id','=','reports.incident_id')
                 ->join('priorities','priorities.id','=','reports.priority_id');

        if(null !== $req->input('picker1') && null == $req->input('picker2') )
        {

            $from   =   date("Y-m-d H:i:s", strtotime($req->input('picker1').'00:00:00'));
            
            $query->where('reports.created_at','>=',$from);
            
        }

        if(null !== $req->input('picker1') && null !== $req->input('picker2') )
        {

            $from   =   date("Y-m-d H:i:s", strtotime($req->input('picker1').'00:00:00'));
            $to     =   date("Y-m-d H:i:s", strtotime($req->input('picker2').'23:59:59'));
            
            $query->where('reports.created_at','>=',$from)->where('reports.created_at','<=',$to);
            
        }
        
        if(null !== $req->input('store'))
        {
            $query->whereIn('reports.store_id',$req->input('store'));
            
        }
        if(null !== $req->input('camera'))
        {
            $query->whereIn('reports.camera_id',$req->input('camera'));
        }
        if(null !== $req->input('incident'))
        {
            $query->whereIn('reports.incident_id',$req->input('incident'));
        }
        if(null !== $req->input('priority'))
        {
            $query->whereIn('reports.priority_id',$req->input('priority'));
        }
    

        $result = $query->select('reports.id','users.name AS username','stores.store_name','cameras.camera_name','incidents.incident_name','priorities.priority_level','reports.time','reports.date','reports.status')->where('reports.user_id',$user)->get();
       
        return json_encode($result);

    }

}
