<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/hello', function () {
    return 'Hello world';
})->name('hello');

Route::get('/hello/{name}', function ($name) {
    return 'hello, ' . $name;
});

Route::get('/calc/{re_string}', function ($re_string) {
    $matches = array();
    if(preg_match('^(?!.*[\+\.]{2}.*)\d[\d\.\+]*\d$^', $re_string, $matches) == true){
        $result_arr = preg_split('/\+/', $matches[0]);
        print 'Your input: '. $matches[0] . PHP_EOL;
        print "Your result " . array_sum($result_arr);
    }
    else{
        print "Your expression is invalid. Try input something other.";
    }
}); //->where('re_string', '^(?!.*[\+\.]{2}.*)\d[\d\.\+]*\d$');

Route::get('/lyrics/all', 'LyricsController@show_list')->name('lyrics-data'); // lyrics
Route::get('/lyrics/{id}', 'LyricsController@by_id')->name('lyrics-data-by-id'); // get by id


Route::get('/signin', function (){
    return view('login');
})->name('lyrics-signin');
Route::post('/signin', function (Request $request){
    return redirect()->route('home')->with('success', 'Успішно!');
})->name('lyrics-form');
