<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use App\Http\Controllers\AppUserController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ListController;
use App\Mail\SampleMail;

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
$data="hi,Let Learn Larvel";
// $data=Str::ucfirst($data);
// $data=Str::replaceFirst("Hi","hello",$data);
// $data=Str::camel($data);
// $data=Str::of($data)
//       ->ucfirst($data)
//       ->replaceFirst("Hi","hello",$data)
//       ->camel($data);
// echo $data;
Route::get('/', function () {
    //return view('welcome');
    return new SampleMail();
});
// // Route::get('/{name}', function ($name) {
// //     echo $name;
// //     return view('welcome',['name'=>$name]);
// // });
// Route::get('/', function () {
//     return view('welcome');
//     //return redirect('about');
// });
// // Route::get('user','AppUser@index');
// Route::get('user/{name}',[AppUserController::class,'index']);
Route::get('users',[AppUserController::class,'index']);
// Route::get('about',[AppUserController::class,'loadview']);
// Route::get('fetchdata',[AppUserController::class,'fetchdata']);
// Route::get('apidata',[AppUserController::class,'apidata']);

// Route::put('GetData',[AppUserController::class,'GetData']);
// Route::post('/uploadform',[AppUserController::class,'uploadform']);
// Route::post('userinsert',[AppUserController::class,'userinsert']);
// Route::post('deleteuser/{id}',[AppUserController::class,'deleteuser']);

// Route::view('noaccess','noaccess');
// Route::view('upload','upload');
// Route::view('userform','userformview');

// Route::view('home','home')->middleware('protectedpage');

// Route::get('/logout', function () {
//    if(session()->has('user'))
//    {
//        session()->pull('user');
//    }
//    return redirect('user');
// });
// Route::get('/user', function () {
//    if(session()->has('user'))
//    {
//       return redirect('apidata');
//    }
//    return view('userform');
// });
// Route::get('/profile/{lang}', function ($lang) {
//    App::setlocale($lang);
//    return view('profile');
// });

// // Route::group(['middleware'=>['protectedpage']],function(){
// // Route::view('home','home');
// // });

Route::get('add',[AppUserController::class,'add']);
Route::any('/userinsert',[AppUserController::class,'userinsert']);
Route::post('/userupdate',[AppUserController::class,'userupdate']);
Route::get('list',[AppUserController::class,'List']);
Route::get('deleteuser/{id}',[AppUserController::class,'deleteuser']);
Route::get('editAppUser/{id}',[AppUserController::class,'edituser']);
Route::get('DBOperation',[AppUserController::class,'DBOperation']);
Route::get('usershow',[MemberController::class,'index']);
Route::get('device/{key:Name}',[MemberController::class,'device']);
Route::get('list',[ListController::class,'list']);
