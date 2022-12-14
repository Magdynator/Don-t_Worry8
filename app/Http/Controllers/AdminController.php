<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Games;
use App\Models\Exam1;
use App\Models\Exam2;
use App\Models\Exam3;
use App\Models\Exam4;
use Hash;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

public function admin(){
    return view('admin.adminlogin');
}

public function adminPage(Request $req){
    
    $req->validate([
        'email'=>'required|email',
        'password'=>'required|min:4'
    ]);
    $emaildetails = Team::where('email', '=', $req->email)->first();
        if ($emaildetails){
            if(Hash::check($req->password, $emaildetails->password)){
                $req->session()->put('loginId', $emaildetails->id);
                $ruleId = $emaildetails-> rule_id;
                switch ($ruleId){
                    case 10:
                        $data = $req->input();
                        $emails = Team::all(); 
                        $games = Games::all();
                        $exam1 = Exam1::all();
                        $exam2 = Exam2::all();
                        return view('admin.adminpage',compact('emails', 'games', 'exam1', 'exam2'));
                        break;
                    case 1:
                        $game1 = Games::all();
                        return view('admin.games.game1.game1',compact('game1'));
                        break;
                    case 2:
                        $game2 = Games::all();
                        return view('admin.games.game2.game2',compact('game2'));
                        break;
                    case 3:
                        $game3 = Games::all();
                        return view('admin.games.game3.game3',compact('game3'));
                        break; 
                    case 4:
                        $game4 = Games::all();
                        return view('admin.games.game4.game4',compact('game4'));
                        break; 
                    case 5:
                        $game5 = Games::all();
                        return view('admin.games.game5.game5',compact('game5'));
                        break;
                    case 6:
                        $game6 = Games::all();
                        return view('admin.games.game6.game6',compact('game6'));
                        break;                      
                    case 7:
                        $game7 = Games::all();
                        return view('admin.games.game7.game7',compact('game7'));
                        break;    
                    case 8:
                        $game8 = Games::all();
                        return view('admin.games.game8.game8',compact('game8'));
                        break;
                    case 9:
                        $game9 = Games::all();
                        return view('admin.games.game9.game9',compact('game9'));
                        break;
                    case 11:
                        $games = Games::all();
                        return view('admin/games/admin/admin1',compact('games') );
                        break;
                    case 12:
                        $games = Games::all();
                        return view('admin/games/admin2/admin2',compact('games') );
                        break;         
                    case 13:
                        $games = Games::all();
                        return view('admin/games/admin3/admin3',compact('games') );
                        break;
                                
                    default:
                    return redirect('/');
                }
            }else{
                return back()->with('fail','Password not matches.');

            }
    
    
    }else{
        return back()->with(' fail','This email is not registered');

    }
    
}

public function email(){
    $emails = Team::all(); 
    return view('admin.email.email')->with('emails', $emails);
}

public function addemail(){
    return view('admin.email.addemail');
}

public function reg(Request $req){  
    $team = new Team();
    $team-> id = $req->id;
    $team-> rule_id = $req->ruleid;
    $team-> email= $req->email;
    $team-> password = Hash::make($req->password);
    $team-> created_at = Carbon::now()->toDateTimeString();
    $res = $team -> save();
    if($res){
        return back()->with('success','Email Added Successfully'); 
    }else{
        return back()->with('fail','Something wrong');

    }

}

public function getEmail($id){  
   
    $team = Team::where('id', $id)->first();
    $id = $team -> id;
    $email = $team -> email;
    $password = $team-> password;
    
    return  view('admin.email.editemail',compact('id','email','password'));

}

public function editEmail($id,Request $req){  
    $team = Team::where('id', $id)->first();
    $newId = $req->input("id");
    $email = $req->input("email");
    $password = $req->input("password");
    $team-> id = $newId;
    $team->email = $email;
    $team->password = $password;
    $team->update();  
    return  redirect('admin/email')->with('status','Email Updated Successfully');
}

public function deleteEmail($id){
    $team = Team::find($id);
    $team->delete();
    return  redirect('admin/email')->with('status','Email Deleted Successfully');

}

public function games(){
    $games = Games::all(); 
    return view('admin.games.games')->with('games', $games);
}

public function getgames($id){  
   
    $game = Games::where('team_id', $id)->first();
   
    return  view('admin.games.editpoint',compact('game'));
}
public function editgames($id, Request $req){
    $teamid = $req->input("teamId");
    $game1 = $req->input("game1");
    $game2 = $req->input("game2");  
    $game3 = $req->input("game3");  
    $game4 = $req->input("game4");  
    $game5 = $req->input("game5");  
    $game6 = $req->input("game6");  
    $game7 = $req->input("game7");  
    $game8 = $req->input("game8");  
    $game9 = $req->input("game9");    

    DB::update('update games set team_id = ?, game_1 = ?, game_2 = ? , game_3 = ?, game_4 = ?, game_5 = ?, game_6 = ?, game_7 = ?, game_8 = ?, game_9 = ? where team_id = ?', [$teamid , $game1, $game2, $game3, $game4, $game5, $game6, $game7, $game8, $game9, $id]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');
}


public function game1(){
    return view('admin.games.game1.addpoint');
}

public function addGame1(Request $req){  
    $teamId = $req->input("teamId");
    $game1P = $req->input("game1");
    DB::insert('insert into games (team_id, game_1) values (?, ?)', [$teamId, $game1P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}
public function game2(){
    return view('admin.games.game2.addpoint');
}

public function addGame2(Request $req){  
    $teamId = $req->input("teamId");
    $game2P = $req->input("game2");
    DB::insert('insert into games (team_id, game_2) values (?, ?)', [$teamId, $game2P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}

public function game3(){
    return view('admin.games.game3.addpoint');
}

public function addGame3(Request $req){  
    $teamId = $req->input("teamId");
    $game3P = $req->input("game3");
    DB::insert('insert into games (team_id, game_3) values (?, ?)', [$teamId, $game3P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}

public function game4(){
    return view('admin.games.game4.addpoint');
}

public function addGame4(Request $req){  
    $teamId = $req->input("teamId");
    $game4P = $req->input("game4");
    DB::insert('insert into games (team_id, game_4) values (?, ?)', [$teamId, $game4P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}

public function game5(){
    return view('admin.games.game5.addpoint');
}

public function addGame5(Request $req){  
    $teamId = $req->input("teamId");
    $game5P = $req->input("game5");
    DB::insert('insert into games (team_id, game_5) values (?, ?)', [$teamId, $game5P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}

public function game6(){
    return view('admin.games.game6.addpoint');
}

public function addGame6(Request $req){  
    $teamId = $req->input("teamId");
    $game6P = $req->input("game6");
    DB::insert('insert into games (team_id, game_6) values (?, ?)', [$teamId, $game6P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}

public function game7(){
    return view('admin.games.game7.addpoint');
}

public function addGame7(Request $req){  
    $teamId = $req->input("teamId");
    $game7P = $req->input("game7");
    DB::insert('insert into games (team_id, game_7) values (?, ?)', [$teamId, $game7P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}

public function game8(){
    return view('admin.games.game8.addpoint');
}

public function addGame8(Request $req){  
    $teamId = $req->input("teamId");
    $game8P = $req->input("game8");
    DB::insert('insert into games (team_id, game_8) values (?, ?)', [$teamId, $game8P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}

public function game9(){
    return view('admin.games.game9.addpoint');
}

public function addGame9(Request $req){  
    $teamId = $req->input("teamId");
    $game9P = $req->input("game9");
    DB::insert('insert into games (team_id, game_9) values (?, ?)', [$teamId, $game9P]);
    return  redirect('/adminpanal')->with('status','Game Point Added Successfully');

}
public function getgamesA1($id){  
   
    $game = Games::where('team_id', $id)->first();
   
    return  view('admin.games.admin.editpoint',compact('game'));
}

public function editgamesA1($id, Request $req){
    $teamid = $req->input("teamId");
    $game1 = $req->input("game1");
    $game2 = $req->input("game2");  
    $game3 = $req->input("game3");  
 
    DB::update('update games set team_id = ?, game_1 = ?, game_2 = ? , game_3 = ? where team_id = ?', [$teamid, $game1, $game2, $game3, $id]);
    return  redirect('/adminpanal');
}

public function getgamesA2($id){  
   
    $game = Games::where('team_id', $id)->first();
   
    return  view('admin.games.admin2.editpoint',compact('game'));
}

public function editgamesA2($id, Request $req){
    $teamid = $req->input("teamId");
    $game4 = $req->input("game4");
    $game5 = $req->input("game5");  
    $game6 = $req->input("game6");  
 
    DB::update('update games set team_id = ?, game_4 = ?, game_5 = ? , game_6 = ? where team_id = ?', [$teamid, $game4, $game5, $game6, $id]);
    return  redirect('/adminpanal');
}
public function getgamesA3($id){  
   
    $game = Games::where('team_id', $id)->first();
   
    return  view('admin.games.admin3.editpoint',compact('game'));
}

public function editgamesA3($id, Request $req){
    $teamid = $req->input("teamId");
    $game7 = $req->input("game7");
    $game8 = $req->input("game8");  
    $game9 = $req->input("game9");  
 
    DB::update('update games set team_id = ?, game_7 = ?, game_8 = ? , game_9 = ? where team_id = ?', [$teamid, $game7, $game8, $game9, $id]);
    return  redirect('/adminpanal');
}

public function upMas(Request $req){
    $mass = $req->input('mass');
    $image = $req->input('img');
        

        DB::insert('insert into mas (masseges, img) values (?, ?)', [$mass, $image]);
    return redirect('/adminpanal');
}

public function getsetting(Request $req){
    $state =  $req->input('state');
    $state2 = $req->input('state2');
    $state3 = $req->input('state3');
    $state4 = $req->input('state4');
    $id =DB::table('others')->max('id');
    DB::update('update others set open_or1 = ?, open_or2 = ?, open_or3 = ? , open_or4 = ? where id = ?', [$state, $state2, $state3, $state4,$id]);
    return redirect('/adminpanal');
   
}
 
public function exam1A(Request $req){
    $tp= 0;
    $qu1 = $req->input('1');
    if ($qu1 == "???????? ????????????"){
        $tp = $tp + 2;
    }
    $qu2 = $req ->input('2');
    if($qu2 == "????????????"){
        $tp = $tp + 2;
    }
    $qu3 = $req->input('3');
    if($qu3 == "???????????????? ??????????"){
        $tp = $tp + 2;
    }
    $qu4 = $req->input('4');
    if($qu4 == "???????????? ??????????"){
        $tp = $tp + 2;
    }
    $qu5 = $req->input('5');
    if($qu5 == 89){
        $tp = $tp + 2;
    }
    $qu6 = $req->input('6');
    if($qu6 == "?????????????? ???? ????????"){
        $tp = $tp + 2;
    }
    $qu7 = $req->input('7');
    if($qu7 == "??????????????"){
        $tp = $tp + 2;
    }        

    $qu8 = $req->input('8');
    if($qu8 == "????????????"){
        $tp = $tp + 2;
    }

    $qu9 = $req->input('9');
    if($qu9 == "????????????"){
        $tp = $tp + 2;
    }

    $qu10 = $req->input('10');
    if($qu9 == "???????? ??????????"){
        $tp = $tp + 2;
    }

    $id = Session::get('loginId');
    $team = Team::where('id', $id)->first();
    $email = $team -> email;
    DB::insert('insert into exam1s (team_id,email ,exam_1_point) values (?,?,?)', [$id,$email,$tp]);
    return redirect('/'); 

}
public function exam2A(Request $req){
    $tp= 0;
    $qu1 = $req->input('1');
    if ($qu1 == "14"){
        $tp = $tp + 2;
    }
    $qu2 = $req ->input('2');
    if($qu2 == "?????????? ???? ????????"){
        $tp = $tp + 2;
    }
    $qu3 = $req->input('3');
    if($qu3 == "?????????? ??????"){
        $tp = $tp + 2;
    }
    $qu4 = $req->input('4');
    if($qu4 == "??????????"){
        $tp = $tp + 2;
    }
    $qu5 = $req->input('5');
    if($qu5 == "???????????????? "){
        $tp = $tp + 2;
    }
    $qu6 = $req->input('6');
    if($qu6 == "???????? "){
        $tp = $tp + 2;
    }
    $qu7 = $req->input('7');
    if($qu7 == "????????????"){
        $tp = $tp + 2;
    }        

    $qu8 = $req->input('8');
    if($qu8 == "??????????????"){
        $tp = $tp + 2;
    }

    $qu9 = $req->input('9');
    if($qu9 =="5"){
        $tp = $tp + 2;
    }

    $qu10 = $req->input('10');
    if($qu9 == "??????????"){
        $tp = $tp + 2;
    }
    $id = Session::get('loginId');
    $team = Team::where('id', $id)->first();
    $email = $team -> email;
    DB::insert('insert into exam2s (team_id,email ,exam_2_point) values (?,?,?)', [$id,$email,$tp]);
    return redirect('/'); 

}
public function logout(){
    if(Session::has("loginId")){
        Session::pull("loginId");
        return redirect('/');
    }

}
}
