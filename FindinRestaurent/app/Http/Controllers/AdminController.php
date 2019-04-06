<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;
use App\User;
use App\Location;
use App\Restaurent;
use App\Preference;
use DB;
use Validator;

/**
 * 
 */
class AdminController extends Controller
{
	
	function index(Request $req)
	{
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$user = DB::table('users')
				->where('id','=',$id)
				->first();
			
    		return View('admin.index');
		}else{
			return redirect('/login');
		}
	}
	
	function getLocation(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$locations = Location::all();			
    		return View('admin.locationPage',compact('locations'));
		}else{
			return redirect('/login');
		}
	}

	function postLocation(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			// dd($req->police_station);
			$location = new Location();
			$location->police_station = $req->police_station;
			$location->district = $req->district;
			$location->save();

			$locations = Location::all();		
    		// return View('admin.locationPage',compact('locations'));
    		return redirect()->back()->with('locations');
		}else{
			return redirect('/login');
		}
	}

	function getRestaurent(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			$restaurents = Restaurent::all();			
    		return View('admin.restaurentList',compact('restaurents'));
		}else{
			return redirect('/login');
		}
	}

	function addRestaurent(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');

			$locations = location::all();
			$preference_type = Preference::all();
			$users = User::where('user_type_id','3')->get();			
    		return View('admin.addRestaurent',compact('locations','preference_type','users'));
		}else{
			return redirect('/login');
		}
	}

	function postRestaurent(Request $req){
		if($req->session()->has('id')){
			$id = $req->session()->get('id');
			// dd($req->file('r_image'));
			$photo="";
          	if($req->hasFile('r_image'))
            {
                $destinationPath = "restaurent_images";
                $file = $req->file('r_image');
                $extension=$file->getClientOriginalExtension();
                $fileName = rand(0,100).".".$extension;
                $file->move($destinationPath,$fileName);
                $photo = $fileName;
            }
            else
            {
                dd('Error uploading file');
            }

			$restaurent = new Restaurent();
			$restaurent->name = $req->name;
			$restaurent->address = $req->address;
			$restaurent->contact = $req->contact;
			$restaurent->email = $req->email;
			$restaurent->image = $photo;
			$restaurent->location_id = $req->location_id;
			$restaurent->preference_type_id = $req->preference_type_id;
			$restaurent->user_id = $req->user_id;
			$restaurent->save();

			$restaurents = Restaurent::all();			
    		return View('admin.restaurentList',compact('restaurents'));
		}else{
			return redirect('/login');
		}
	}

}