<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function home(){
     
        return view('user/loginpage');
    }

    public function login(Request $req){  
    $emaildetails = DB::table('teams')->where('email', $req->input('email'))->first();
    if (empty($emaildetails)){
        return redirect('/')->with('status','Email or Password was wrong');
    }   
    if($req->input('email') == $emaildetails-> email and $req->input('password') == $emaildetails-> password ) {
        if ($emaildetails-> rule_id == 0){
            return view('user/home');
        }else{
            return redirect('/');
        }    
    } else{
        return redirect('/')->with('status','Email or Password was wrong');
    }    
}
}