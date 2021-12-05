<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/',[homeController::class,'home']);
// Route::get('/',function(){
//     $personalDatas = [
//         'p1'=>[
//             'name'=>'John',
//             'age'=>21,
//             'job'=>'daily labour'
//         ],
//         "p2"=>[
//             'name'=>'Mary',
//             'age'=>18,
//             'job'=>'comedian'
//         ],
//         'p3'=>[
//             'name'=>'Boby',
//             'age'=>34,
//             'job'=>'shop keeper'
//         ]
//         ];
        
//     return view('home',compact('personalDatas'));
// });


Route::get('/about',function(){
    return view('about');
});
