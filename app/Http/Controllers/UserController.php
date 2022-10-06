<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Games;
use App\Models\Exam1;



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
            return view('user/index');
        }else{
            return redirect('/');
        }    
    } else{
        return redirect('/')->with('status','Email or Password was wrong');
    }     
}

public function getMas(){
    $mas = DB::table('mas')
    ->orderBy('id', 'desc')
    ->first();
    return view('admin.massage.messeage',compact('mas')); 
 }

 public function res(Request $req){  
    $emaildetails = DB::table('teams')->where('email', $req->input('email'))->first();
    if (empty($emaildetails)){
        return redirect('/')->with('status','Email or Password was wrong');
    }   
    if($req->input('email') == $emaildetails-> email and $req->input('password') == $emaildetails-> password ) {
        if ($emaildetails-> rule_id == 0){
            $game1 = Games::where('team_id','=',$emaildetails-> id)->sum('game_1');
            $game2 = Games::where('team_id','=',$emaildetails-> id)->sum('game_2');
            $game3 = Games::where('team_id','=',$emaildetails-> id)->sum('game_3');
            $game4 = Games::where('team_id','=',$emaildetails-> id)->sum('game_4');
            $game5 = Games::where('team_id','=',$emaildetails-> id)->sum('game_5');
            $game6 = Games::where('team_id','=',$emaildetails-> id)->sum('game_6');
            $game7 = Games::where('team_id','=',$emaildetails-> id)->sum('game_7');
            $game8 = Games::where('team_id','=',$emaildetails-> id)->sum('game_8');
            $game9 = Games::where('team_id','=',$emaildetails-> id)->sum('game_9');
            $exam1 = Exam1::where('team_id','=',$emaildetails-> id)->sum('exam_1_point');
            $totalP = $exam1+ $game1 + $game2 +$game3 +$game5 + $game6 +$game7 +$game8 +$game9;
            // $totalP = 0;
            // for ($i = 1 ; $i <10 ; $i++){
            // foreach ($games[0] as $game ) {
            //     $totalP =  $totalP + $game;
            // }
        
                return view('resal/res',compact('totalP'));
        }else{
            return redirect('/');
        }    
    } else{
        return redirect('/')->with('status','Email or Password was wrong');
     
}
 }
}