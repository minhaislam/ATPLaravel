<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
    	
    	return view('login.index');
    }

    public function verify(Request $req){
        $user = DB::table('users')
                    ->where('userid', $req->uname)
                    ->where('password', $req->password)
                    ->first();
        
        if($user != null){
            $req->session()->put('fullname',$user->fullname);
            return redirect()->route('home.index');
        }else{
            $req->session()->flash('msg', 'invalid username/password');
            //return view('login.index');
            return redirect('/login');
        }
    	
    	
   	}


}
