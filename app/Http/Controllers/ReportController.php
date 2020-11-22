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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\HighPriorityEmail;
 
class ReportController extends Controller 
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $incidents = incident::all();
        $priorities = priority::all();
        $users = User::all();

        
        return view('/admin/new-report',['users'=>$users, 'priorities'=>$priorities,'incidents'=>$incidents]);
    }

    public function getstore($id)
    {
        $store = store::select('id','store_name')->where('user_id',$id)->get();
        return json_encode($store);
    }
    public function getcamera($id)
    {
        $camera = camera::select('id','camera_name')->where('store_id',$id)->get();
        return json_encode($camera);   
    }
 
    public function delete_report($report_id){
        
       
        DB::table('reqs')->where('report_id',$report_id)->delete();
        DB::table('images')->where('report_id',$report_id)->delete();
        DB::table('reports')->where('id',$report_id)->delete();
        
        return back()->with('success','Report Deleted Successfully');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //echo $req;
        
        date_default_timezone_set("Asia/Karachi");

        $report = new report;
        $report->user_id = $req->user;
        $report->camera_id = $req->camera;
        $report->store_id = $req->store;
        $report->priority_id = $req->priority;
        $report->incident_id = $req->incident;
        $report->Description = $req->description;
        $report->admin_id = Auth::user()->id; 
        $report->status = 0;
        $report->date = date("d-m-Y");
        $report->time = date("h:i a");

        $check1 = $report->save();

        $files = $req->all();
        

        if(array_key_exists('image',$files))
        {
            
            $rep = DB::table('reports')->where('id',$report->id)->first();
            
            foreach ($files['image'] as $key => $value) 
            {
                $optionImage = $this->uploadOptionImage($value);
                //make a query here to save image name with report id in DB
                $image = new image;
                $image->report_id = $rep->id;
                $image->path = $optionImage;
                $image->save();

            }
        }

        $result = report::with('priority','camera','admin','store','user','incident')->latest()->first();

        if($req->priority == 3)
        {
            $result_email =  DB::table('stores')
                  ->join('cities','stores.city_id','=','cities.id')
                  ->join('states','stores.state_id','=','states.id')
                  ->join('countries','stores.country_id','=','countries.id')
                  ->select('stores.store_name','stores.address','cities.city_name','states.state_name','countries.country_name')->where('stores.id',$req->store)->first();

            $temp = DB::table('incidents')->select('incident_name')->where('id',$req->incident)->first();
            $temp1 = DB::table('cameras')->select('camera_name')->where('id',$req->camera)->first();

            $data['reporter_name'] = Auth::user()->name;
            $data['incident'] = $temp->incident_name;
            $data['camera'] = $temp1->camera_name;
            $data['store'] = $result_email->store_name;
            $data['address'] = $result_email->address;
            $data['city'] = $result_email->city_name;
            $data['state'] = $result_email->state_name;
            $data['country'] = $result_email->country_name;
            $data['time'] = $report->time;
            $data['date'] = $report->date;
            $data['desc'] = $req->description;

            $user_email = DB::table('users')->select('email')->where('id',$req->user)->first();
            
            Mail::to($user_email->email)->send(new HighPriorityEmail($data));

        }
    
        //echo $result;
        return  json_encode($result);
        
    }

     private function uploadOptionImage($file)
    {
        if(file_exists($file))
        {
            //Move File
            $path="public/report-image";
            $custom=date('joYhis')."_report_";
            $file->move($path,$custom.$file->getClientOriginalName());
            return $custom.$file->getClientOriginalName();
        }
        else
        {
            return "";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(report $report)
    {
        //
    }
}
