<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class mainCtrl extends Controller
{
    //
     public function index(Request $req)	
    {
       //$new_time = date("Y-m-d H:i:sa", strtotime('+5 hours'));
       //echo $new_time;

       date_default_timezone_set("Asia/Karachi");
       echo date("H:i a");
    }



    public function getlogout()
    {
     	Auth::logout();
    	//echo "Logout Ctrl";
    	//dd($req->a);
    	return redirect('index');
	}

	public function image(Request $req)
	{ 
        $files = $req->all();
        dd(array_key_exists('image',$files));
       foreach ($files['image'] as $key => $value) {
            $optionImage    =   $this->uploadOptionImage($value);
            //make a query here to save image name with report id in DB
            echo $optionImage;

       }
       // dd($optionImage);

    }

    private function uploadOptionImage($file)
    {
        if(file_exists($file))
        {
            //Move File
            $path="assets/report-image";
            $custom=date('joYhis')."_report_";
            $file->move($path,$custom.$file->getClientOriginalName());
            return $custom.$file->getClientOriginalName();
        }
        else
        {
            return "";
        }
    }
}
