<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;
use Validator;
use Hash;

class LoginController extends Controller{
	
	public function loginView(){
    	return View('login');
	}

	public function checkLogin(Request $req){
        Validator::make($req->all(),[
            'email' => 'required|min:6',
            'password' => 'required'
            ])->validate();

        $password = $req->password;
        // dd($password);
        $user_data = User::where('email',$req->email)->first();
        // dd($user_data);
        if(Hash::check($req->password,$user_data->password)){
            $db = DB::table('users')
            ->where('email',$req->email)
            ->first();
        }else{
            return redirect()->back()->with('message','Your password dis not matched !!');
        }
    	// $db = DB::table('users')
     //    	->where('email',$req->email)
     //    	->first();
     //    // dd($db);

    	if ($db != null) {
            $req->session()->put('id',$db->id);

    		if ($db->user_type_id == '1') {

    			return redirect()->route('Admin_Dashboard');
    			# code...
    		}else if ($db->user_type_id == '3') {
    			# code...
    			return redirect()->route('Restaurent_owner_Dashboard');
    		}else{
                return redirect()->route('User_Dashboard');
            }

    	}else{
    		return redirect()->back()->with('message', "Wrong password or wrong email !! Please try again..");
    	}
    }

	public function registrationView(){
    	return View('register');
	}

    public function registration(Request $req){
        $user = new User();

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = bcrypt($req->password);
        $user->user_type_id = 3;

        $user->save();

        return redirect('/');
    }

    public function logout(Request $req){
        if($req->session()->has('id')){
            $req->session()->flush();
            return redirect('/');
        }
   
    }
 
}
