<?php
use Illuminate\Http\Request;
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
Route::group(['domain' => 'durgajobstvm.com'], function()
{
    Route::any('/', function()
    {
        return 'My own domain';
    });
	Route::any('login', function()
    {
        return redirect('https://klubsta.com/login');
    });
});
Route::get('/', function () {
	
    	return view('landing');
});
Route::get('login', function (Request $request) {
	$name=$request->input('name');
    	return response('real login '.$name)->header('Content-Type', 'text/plain');
});
Route::get('/{username}', function ($username=null) {
		return '<title>'.$username.' - KLUBSTA | Taking you next level</title>'.view('fun',['username'=>$username]);
});
Route::get('/{username}/home', function ($username=null) {
		return redirect('/'.$username);
});
