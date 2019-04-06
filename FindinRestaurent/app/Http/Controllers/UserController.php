<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Collection;
use App\User;
use App\Location;
use App\Restaurent;
use App\Preference;
use App\UserType;
use App\Menu;
use DB;
use Validator;

class UserController extends Controller
{
    
    public function createUser(Request $req)
    {
        $user_type = UserType::all();
        return view('admin.createUser',compact('user_type'));
    }

    public function storeUser(Request $req)
    {
       	// dd($req->type);
       	$user = new User();
       	$user->name = $req->name;
       	$user->email = $req->email;
       	$user->password = bcrypt($req->password);
       	$user->user_type_id = $req->type;
       	$user->save();
        return redirect('/admin-dashboard');
    }

    public function restaurent_owner_index(Request $req){
        if($req->session()->has('id')){
          $id = $req->session()->get('id');
          $data = Restaurent::where('user_id',$id)->first();

          return View('user.index',compact('data'));
        }else{
          return redirect('/login');
        }
      }

    public function addItem(Request $req){
      if($req->session()->has('id')){
        $photo="";
        if($req->hasFile('image'))
        {
            $destinationPath = "item_images";
            $file = $req->file('image');
            $extension=$file->getClientOriginalExtension();
            $fileName = rand(0,100).".".$extension;
            $file->move($destinationPath,$fileName);
            $photo = $fileName;
        }
        else
        {
            dd('Error uploading file');
        }

        $item = new Menu();
        $item->item_name = $req->name;
        $item->price = $req->price;
        $item->restaurent_id = $req->restaurent_id;
        $item->image = $photo;
        $item->save();

        return redirect()->back()->with('success_message', "Your Item Has Been added");
      }else{
        return redirect()->back()->with('message', "Your Item Not added");
      }
    }
    
    public function menu(Request $req){
      if($req->session()->has('id')){
        $id = $req->session()->get('id');
        $rid = Restaurent::where('user_id',$id)->first();
        $menus = Menu::where('restaurent_id',$rid->id)->get();
        return View('user.menu',compact('menus'));
      }else{
        return redirect('/login');
      }
    }

    public function userDashboard(Request $req){
      if($req->session()->has('id')){
        $restaurents = Restaurent::all();
        return view('user.user_dashboard',compact('restaurents'));
      }else{
        return redirect('/login');
      }
    }

    public function seeMenus($restaurent_id, Request $req){
      if($req->session()->has('id')){
        $id = $req->session()->get('id');
        $menus = Menu::where('restaurent_id',$restaurent_id)->get();
        return View('user.see_menus',compact('menus'));
      }else{
        return redirect('/login');
      }
    }

}