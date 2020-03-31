<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $req){

		//$data = array('name'=>'alamin', 'type'=> 'admin');    	
		//$data = ['name'=>'alamin', 'type'=> 'admin']; 

/*    	return view('home.index')
    			->with('name', 'alamin')
    			->with('type', 'admin');*/

/*     	return view('home.index')
    			->withName('alamin')
    			->withType('admin');*/
    	
    /*	$v = view('home.index');
    	$v->withName('alamin');
    	$v->withType('admin');
    	return $v;*/

        //session 
        
        /*
        $req->session()->put('username', 'alamin');
        $req->session()->put('password', 'aaaa');
        $data = $req->session()->get('username');
        $req->session()->forget('username');
        $req->session()->flush();
        $req->session()->flash('msg', 'invalid username/password');
        $req->session()->flash('error', 'invalid');
        $req->session()->keep('msg');
        $req->session()->reflash();
        $req->session()->pull('username');
        //$data = $req->session()->all();
        if($req->session()->has('username')){
        }*/

        //session('cgpa', 4);

        return view('home.index');


    }

    public function list(){
        $users = DB::table('users')->get();
        return view('home.view_users', ['std' => $users]);
    }

    public function show($id){
       
        $user = DB::table('users')->find($id);  
        return view('home.show', ['std' => $user]);
    }

    public function add(){
                return view('home.createuser');

    }

    public function create(Request $req){

        $insert = DB::table('users')->insertGetId(
    ['fullname' => $req->fullname, 'userid' => $req->userid, 'password' => $req->password,'type' => $req->type]
);
                         
        if($insert){
            return redirect()->route('home.list');
        }else{
            return redirect()->route('home.add');
        }

    }

    public function edit($id){
         $user = DB::table('users')->find($id);  
        return view('home.edit', ['std' => $user]);
        


    }

    public function update($id, Request $req){
       $update= DB::table('users')
            ->where('id', $id)
            ->update(['fullname' => $req->fullname,'userid' => $req->userid,'password' => $req->password,'type' => $req->type]);

             if($update){
            return redirect()->route('home.list');
        }else{
            return redirect()->route('home.edit');
        }

    }

    public function delete($id){
         $user = DB::table('users')->find($id);  
        return view('home.delete', ['std' => $user]);

    }

    public function destroy($id, Request $req){
        $delete=DB::table('users')->where('id', $id)->delete();
        if ($delete) {
            return redirect()->route('home.list');
        }else{
            return redirect()->route('home.delete');
        }

    }

    /*public function getStudentList(){
        return [
            ['id'=>'12','name'=>'alamin','cgpa'=>2.4,'dept'=>'CS'],
            ['id'=>'14','name'=>'RAKIB','cgpa'=>2.4,'dept'=>'CIS'],
            ['id'=>'15','name'=>'XYZ','cgpa'=>2.4,'dept'=>'CS'],
            ['id'=>'16','name'=>'ABC','cgpa'=>2.4,'dept'=>'CSE'],
            ['id'=>'13','name'=>'sadsdj','cgpa'=>2.4,'dept'=>'CSSE']
        ];
    }*/
}
