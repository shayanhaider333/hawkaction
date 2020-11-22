<?php

namespace App\Http\Controllers;

use App\store;
use App\city; 
use App\country;
use App\state;
use App\User;
use App\camera;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class StoreController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $cities = city::get();
        $countries = country::get();
        $states = state::get();
        $users = User::get();
        $stores = store::get();

        return view('admin.store',['users'=>$users,'cities'=>$cities,'countries'=>$countries,'states'=>$states,'stores'=>$stores]);
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
    public function store(Request $req)
    {
        $store = new store;
        $store->store_name = $req->input('store_name');
        $store->address = $req->input('address');
        $store->user_id = $req->input('user_id');
        $store->city_id = $req->input('city_id');
        $store->state_id = $req->input('state_id');
        $store->country_id = $req->input('country_id');
        $store->save();

        $result = DB::table('stores')
                  ->join('users','stores.user_id','=','users.id')
                  ->join('cities','stores.city_id','=','cities.id')
                  ->join('states','stores.state_id','=','states.id')
                  ->join('countries','stores.country_id','=','countries.id')
                  ->select('stores.id','stores.store_name','stores.address','users.name as username','cities.city_name','states.state_name','countries.country_name')->orderBy('id','desc')->first();

        if($result)
        {
            return json_encode($result);    
        }
        else
        {
            return 'null';
        }

    }


    public function show()
    {
        $result = DB::table('stores')
                  ->join('users','stores.user_id','=','users.id')
                  ->join('cities','stores.city_id','=','cities.id')
                  ->join('states','stores.state_id','=','states.id')
                  ->join('countries','stores.country_id','=','countries.id')
                  ->select('stores.id','stores.store_name','stores.address','users.name as username','cities.city_name','states.state_name','countries.country_name')->get();
        if($result)
        {
            return json_encode($result);    
        }
        else
        {
            return 'null';
        }
        
    }

    public function delete($id)
    {
        $result = store::where('id',$id)->delete();

        return back()->with('success','Store Deleted Successfully');
    }

    public function addcamera(Request $req)
    {
            $camera = new camera;
            $camera->store_id = $req->store_id;
            $camera->camera_name = $req->camera_name;
            $camera->save();
    }


    // =========================================================================================================
    // ========================================= USER FUNCTION =================================================
    // =========================================================================================================

    public function userindex()
    {
        $user = Auth::user()->id;

        $stores = store::with('user','city','state','country')->where('stores.user_id',$user)->get();

        //echo $stores;
        return view('client.user-store',['stores'=>$stores]);

    }











    /**
     * Display the specified resource.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(store $store)
    {
        //
    }
}
