<?php

namespace App\Http\Controllers;

use App\req;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    public function index()
    {
        //
        $this->show(); 

        return view('admin.video-request');
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\req  $req
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
         $results1 = DB::table('reqs')
                    ->join('reports','reqs.report_id','=','reports.id')
                    ->join('stores','reports.store_id','=','stores.id')
                    ->join('admins','reqs.admin_id','=','admins.id')
                    ->join('users','reqs.user_id','=','users.id')
                    ->select('reqs.id','reqs.report_id','users.name as username','admins.name as adminname','stores.store_name','reqs.time','reqs.date','reqs.status')->orderBy('id','Desc')->get();
        //$results = json_encode($results1,true);
       
        return json_encode($results1);

       
        
    }

    public function checkData(Request $req)
    {
        $check = req::select('id')->orderBy('id','Desc')->first();
        //echo "Cell value ".$req->cell;
        //echo "Query value ".$check->id;
        if($req->cell == null)
        {
            $req->cell = 0;
        } 

        if($req->cell < $check->id)
        {
            //echo "Not equal";      
            $result = DB::table('reqs')
                    ->join('reports','reqs.report_id','=','reports.id')
                    ->join('stores','reports.store_id','=','stores.id')
                    ->join('admins','reqs.admin_id','=','admins.id')
                    ->join('users','reqs.user_id','=','users.id')
                    ->select('reqs.id','reqs.report_id','users.name as username','admins.name as adminname','stores.store_name','reqs.time','reqs.date','reqs.status')->where('reqs.id','>',$req->cell)->orderBy('id','Desc')->get();

            $final = array();

            array_push($final, $result, $check);
        
            return json_encode($final);

        }
        else 
        {
            return 'null';
        }
            
    }

    public function approve($id)
    {

        $result = req::where('id',$id)->update(['status'=>1,'admin_id'=>Auth::user()->id]);

        return redirect('/admin/video-request');
    }


    // ==================================== USER FUNCTIONS ==================================================

    public function userindex()
    {
        //
        $this->usershow();

        return view('client.user-video-request');
       
    }

    public function usershow()
    {
        $user = Auth::user()->id;

         $results1 = DB::table('reqs')
                    ->join('reports','reqs.report_id','=','reports.id')
                    ->join('stores','reports.store_id','=','stores.id')
                    ->join('admins','reqs.admin_id','=','admins.id')
                    ->join('users','reqs.user_id','=','users.id')
                    ->select('reqs.id','reqs.report_id','users.name as username','admins.name as adminname','stores.store_name','reqs.time','reqs.date','reqs.status')->where('reqs.user_id',$user)->orderBy('id','Desc')->get();
       
        return json_encode($results1);

       
        
    }

    public function usercheckData(Request $req)
    {
        
        $user = Auth::user()->id;

        $check = req::select('id')->where('user_id',$user)->orderBy('id','Desc')->first();
       
        if($req->cell == null)
        {
            dd($req->cell);
            $req->cell = 0;
        } 

        if($req->cell < $check->id)
        {
            $result = DB::table('reqs')
                    ->join('reports','reqs.report_id','=','reports.id')
                    ->join('stores','reports.store_id','=','stores.id')
                    ->join('admins','reqs.admin_id','=','admins.id')
                    ->join('users','reqs.user_id','=','users.id')
                    ->select('reqs.id','reqs.report_id','users.name as username','admins.name as adminname','stores.store_name','reqs.time','reqs.date','reqs.status')->where('reqs.id','>',$req->cell)->where('reqs.user_id',$user)->orderBy('id','Desc')->get();


            $final = array();

            array_push($final, $result, $check);
        
            return json_encode($final);

        }
        else 
        {
            return 'null';
        }
            
    }


































    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\req  $req
     * @return \Illuminate\Http\Response
     */
    public function edit(req $req)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\req  $req
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, req $req)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\req  $req
     * @return \Illuminate\Http\Response
     */
    public function destroy(req $req)
    {
        //
    }
}
