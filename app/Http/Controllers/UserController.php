<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Games;
use App\Models\Exam1;
use App\Models\Team;
use Hash;
use Session;


class UserController extends Controller
{
    public function home(){

        return view('user/loginpage');
    }

    public function login(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=>'required|min:4'
        ]);
    $emaildetails = Team::where('email', '=', $req->email)->first();
    if ($emaildetails){
        if(Hash::check($req->password, $emaildetails->password)){
            if ($emaildetails-> rule_id == 0){
                $req->session()->put('loginId', $emaildetails->id);
                return view('user/index');
            }else{
                return redirect('/');
            }    
        }else{
            return back()->with('status','Password not matches.');
        }

    }else{
        return back()->with(' fail','This email is not registered');

    }
    
}

 public function res(Request $req){  
        
    return view('user.end');
}
 }
