<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use Auth;

class AdminController extends Controller
{
    function index()
    {
    	return view('login');
    }

    function post_login(Request $request)
    {
    	$user = DB::table('user')->where('username',$request->input('username'))->first();

    	if($user != null){
    		if($user->username == $request->input('username') && $user->password == md5($request->input('password'))){

                Session::put('is_login',true);
                Session::put('id_user',$user->id_user);
                Session::put('username',$user->username);
                Session::put('password',$user->password);

                //return "success";
                return [
                    "status" => "success",
                    "message" => "Berhasil"
                ];
    		}else{
                return [
                    "status" => "error",
                    "message" => $request->input('password')
                ];
            }
    	}else{
    	    return redirect('login');
        }

    }

    function logout()
    {
    	Auth::logout();
    	Session::flush();
    	return redirect('login');
    }
}
