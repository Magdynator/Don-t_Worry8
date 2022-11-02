<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Games;
use App\Models\Exam1;
use App\Models\Exam2;
use Session;
class AlreadyLoggedin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if(Session()->has('loginId')){
            $emaildetails = Team::where('id', '=', Session::get('loginId'))->first();
            $ruleId = $emaildetails-> rule_id;
            switch ($ruleId){
                case 10:
                    $emails = Team::all(); 
                    $games = Games::all();
                    $exam1 = Exam1::all();
                    $exam2 = Exam2::all();
                    return response()->view('admin.adminpage',compact('emails', 'games', 'exam1', 'exam2'));
                    break;
                case 1:
                    $game1 = Games::all();
                    return response()->view('admin.games.game1.game1',compact('game1'));
                    break;
                case 2:
                    $game2 = Games::all();
                    return response()->view('admin.games.game2.game2',compact('game2'));
                    break;
                case 3:
                    $game3 = Games::all();
                    return response()->view('admin.games.game3.game3',compact('game3'));
                    break; 
                case 4:
                    $game4 = Games::all();
                    return response()->view('admin.games.game4.game4',compact('game4'));
                    break; 
                case 5:
                    $game5 = Games::all();
                    return response()->view('admin.games.game5.game5',compact('game5'));
                    break;
                case 6:
                    $game6 = Games::all();
                    return response()->view('admin.games.game6.game6',compact('game6'));
                    break;                      
                case 7:
                    $game7 = Games::all();
                    return response()->view('admin.games.game7.game7',compact('game7'));
                    break;    
                case 8:
                    $game8 = Games::all();
                    return response()->view('admin.games.game8.game8',compact('game8'));
                    break;
                case 9:
                    $game9 = Games::all();
                    return response()->view('admin.games.game9.game9',compact('game9'));
                    break;
                case 11:
                    $games = Games::all();
                    return response()->view('admin/games/admin/admin1',compact('games') );
                    break;
                case 12:
                    $games = Games::all();
                    return response()->view('admin/games/admin2/admin2',compact('games') );
                    break;         
                case 13:
                    $games = Games::all();
                    return response()->view('admin/games/admin3/admin3',compact('games') );
                    break;
                            
                default:
                return response()->view('user/index');
            }
        }
        return $next($request);
    }
}
