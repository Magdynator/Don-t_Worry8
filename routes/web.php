<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController ;
use Illuminate\Support\Facades\DB;
use App\Models\Games;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// home route
Route::get('/',[UserController::class,'home']);
Route::post('/login',[UserController::class,'login']);
Route::get('/login',[UserController::class,'login']);
Route::post('/res',[UserController::class,'res']);
Route::get('/res',[UserController::class,'res']);
// admin route
Route::get('/admin',[AdminController::class,'admin']);
Route::post('/adminpanal',[AdminController::class,'adminPage']);
Route::get('/adminpanal',[AdminController::class,'adminPage']);
//email admin route
Route::get('admin/email',[AdminController::class,'email']);
Route::get('admin/addemail',[AdminController::class,'addemail']);
Route::post('admin/reg',[AdminController::class,'reg']);
Route::get('email/{id}/edit', [AdminController::class, 'getEmail']);
Route::post('email/{id}/edit',[AdminController::class,'editemail']);
Route::get('admin/email/delete/{id}',[AdminController::class,'deleteEmail']);

// admin games
Route::get('admin/Games',[AdminController::class,'games']);
Route::get('admin/{id}/edit/games', [AdminController::class, 'getgames']);
Route::post('admin/{id}/edit/games',[AdminController::class,'editgames']);

// game 1
Route::get('admin/addgame1',[AdminController::class,'game1']);
Route::post('admin/addGame1',[AdminController::class,'addGame1']);

//game 2

Route::get('admin/addgame2',[AdminController::class,'game2']);
Route::post('admin/addGame2',[AdminController::class,'addGame2']);

// game 3

Route::get('admin/addgame3',[AdminController::class,'game3']);
Route::post('admin/addGame3',[AdminController::class,'addGame3']);

// game 4

Route::get('admin/addgame4',[AdminController::class,'game4']);
Route::post('admin/addGame4',[AdminController::class,'addGame4']);

// game 5

Route::get('admin/addgame5',[AdminController::class,'game5']);
Route::post('admin/addGame5',[AdminController::class,'addGame5']);

// game 6

Route::get('admin/addgame6',[AdminController::class,'game6']);
Route::post('admin/addGame6',[AdminController::class,'addGame6']);

// game 7

Route::get('admin/addgame7',[AdminController::class,'game7']);
Route::post('admin/addGame7',[AdminController::class,'addGame7']);


// game 8

Route::get('admin/addgame8',[AdminController::class,'game8']);
Route::post('admin/addGame8',[AdminController::class,'addGame8']);

// game 9

Route::get('admin/addgame9',[AdminController::class,'game9']);
Route::post('admin/addGame9',[AdminController::class,'addGame9']);

Route::get('/exam1',function () {
    $rule =DB::table('others')->orderBy('id', 'DESC')->first();
    if ($rule-> open_or1 == 'close'){
         return view('soon');
    }else{
        return view('exams/exam1');
    }
    

});
Route::get('/exam2',function () {
    $rule =DB::table('others')->orderBy('id', 'DESC')->first();
    if ($rule-> open_or2 == 'close'){
         return view('soon');
    }else{
        return view('exams/exam2');
    }
    

});
Route::get('/exam3',function () {
$rule =DB::table('others')->orderBy('id', 'DESC');
    if ($rule-> open_or3 == 'close'){
         return view('soon');
    }else{
        return view('exams/exam3');
    }
    

});
Route::get('/exam4',function () {
    $rule =DB::table('others')->orderBy('id', 'DESC')->first();
    if ($rule-> open_or4 == 'close'){
         return view('soon');
    }else{
        return view('exams/exam4');
    }
});

Route::get('/admin/Message',function () {
    return view('admin.massage.masgform');
});
Route::get('/setting',function () {
     return view('admin.setting.setting');
});
Route::post('/setting',[AdminController::class,'getsetting']);
Route::post('/welldone',[AdminController::class,'exam1A']);
Route::post('/welldone2',[AdminController::class,'exam2A']);


Route::post('admin/mas',[AdminController::class,'upMas']);
Route::get('/massage', [UserController::class, 'getMas']);


Route::get('admin1/{id}/edit/games', [AdminController::class, 'getgamesA1']);
Route::post('admin1/{id}/edit/games',[AdminController::class,'editgamesA1']);

Route::get('admin2/{id}/edit/games', [AdminController::class, 'getgamesA2']);
Route::post('admin2/{id}/edit/games',[AdminController::class,'editgamesA2']);
Route::get('admin3/{id}/edit/games', [AdminController::class, 'getgamesA3']);
Route::post('admin3/{id}/edit/games',[AdminController::class,'editgamesA3']);
