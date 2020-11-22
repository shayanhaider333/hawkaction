<?php

namespace App\Http\Controllers; 
 
use App\report;
use App\store;
use App\req;
use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DetailController extends Controller 
{
    
    //
    public function index($id)
    {

        $req = count(req::select('id')->where('report_id',$id)->get());

        $images = DB::table('images')->select('path')->where('report_id',$id)->get();

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
                  ->select('reports.id','reports.description','reports.status','reports.time','reports.date','reports.document','reports.link','users.name as username','stores.store_name','stores.address','incidents.incident_name','cameras.camera_name','priorities.priority_level','admins.name as adminname','cities.city_name','states.state_name','countries.country_name')->where('reports.id',$id)->get();

        $comments = DB::table('comments')->where('report_id',$id)->get();
        
        return view('/admin/details',['result' => $result,'req' => $req, 'images' => $images, 'comments' => $comments]);
    }


    public function videoReq(Request $req){

        date_default_timezone_set("Asia/Karachi");

        $test = DB::table('reqs')->select('id')->where('report_id',$req->input('reportt_id'))->get();

        if(isset($test[0]->id))
        {
            echo "Request already exist";
        }
        else
        {
            $reqt = new req;

            $reqt->admin_id = 0;

            $reqt->user_id = Auth::user()->id;

            $reqt->report_id = $req->input('reportt_id');

            $reqt->time = date("h:i a");
            $reqt->date = date("d-m-Y");

            $reqt->status = 0;
            
            $check = $reqt->save(); 

            if($check == true)
            {
                echo 'Video request has been made';
            }

        }


    }

    public function upload_doc(Request $req)
    {
      $files = $req->all();
      //dd($req->doc);
      if(array_key_exists('doc',$files))
        {    
          $document = $this->uploadOption($req->doc);
          //make a query here to save document with report id in DB
          $rep = DB::table('reports')->where('id',$req->rep_id)->update(['document'=>$document]);
        }

    }

    public function upload_link(Request $req)
    {//dd($req->rep_id2);
      DB::table('reports')->where('id',$req->rep_id2)->update(['link'=>$req->video_link]);
    }

    private function uploadOption($file)
    {
        if(file_exists($file))
        {
            //Move File
            $path="document";
            $custom=date('joYhis')."_doc_";
            $file->move($path,$custom.$file->getClientOriginalName());
            return $custom.$file->getClientOriginalName();
        }
        else
        {
            return "";
        }
    }

    public function admin_comment(Request $req)
    {
       $comment = new comment;
      $comment->report_id = $req->reporttt_id;
      $comment->user_name = Auth::user()->name." (Admin)";
      $comment->comment = $req->comment;
      $comment->save();

      $result = DB::table('comments')->where('id',$comment->id)->first();

      $result->created_at = Carbon::parse($result->created_at)->diffForHumans();
      
      return json_encode($result);
    }

    public function admin_comment_delete(Request $req)
    {
      $result = DB::table('comments')->where('user_name',Auth::user()->name.' (Admin)')->where('id',$req->id)->first();
      if($result != null)
      {
        DB::table('comments')->where('id',$req->id)->delete();
        return 1;
      }
      else
      {
        return 0;
      }
    }

    // ==================================== USER FUNCTIONS ==================================================

    public function userindex($id)
    {
      DB::table('reports')->where('id',$id)->update(['status'=>1]);


        $req = count(req::select('id')->where('report_id',$id)->get());

        $images = DB::table('images')->select('path')->where('report_id',$id)->get();

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
                  ->select('reports.id','reports.description','reports.status','reports.time','reports.date','reports.document','reports.link','users.name as username','stores.store_name','stores.address','incidents.incident_name','cameras.camera_name','priorities.priority_level','admins.name as adminname','cities.city_name','states.state_name','countries.country_name')->where('reports.id',$id)->get();
        
        $comments = DB::table('comments')->where('report_id',$id)->get();
        //dd($comments);
        return view('/client/details',['result' => $result,'req' => $req, 'images' => $images,'comments' => $comments]);
    }

    public function user_comment(Request $req)
    {

      $comment = new comment;
      $comment->report_id = $req->reporttt_id;
      $comment->user_name = Auth::user()->name;
      $comment->comment = $req->comment;
      $comment->save();

      $result = DB::table('comments')->where('id',$comment->id)->first();

      $result->created_at = Carbon::parse($result->created_at)->diffForHumans();
      
      return json_encode($result);
    }

    public function user_comment_delete(Request $req)
    {
      $result = DB::table('comments')->where('user_name',Auth::user()->name)->where('id',$req->id)->first();
      if($result != null)
      {
        DB::table('comments')->where('id',$req->id)->delete();
        return 1;
      }
      else
      {
        return 0;
      }
    }


}
