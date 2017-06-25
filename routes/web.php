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
Route::group(['domain'=>'klub.sta'],function(){
	Route::get('/', function () {
	
    	return view('landing');
	});
	Route::get('login', function (Request $request) {
		$name=$request->input('name');
			return response('real login '.$name)->header('Content-Type', 'text/plain');
	});
	Route::get('/{username}', function ($username=null) {
			$username = preg_replace('/\s+/', '', $username);
			$username = str_replace('.', '', $username);
			return '<title>'.$username.' - KLUBSTA | Taking you next level</title>'.view('fun',['username'=>$username]);
	});
	route::get('/{username}/home',function($username='null'){
		return redirect('/'.$username);
	});
	Route::get('/{username}/{page}', function ($username=null,$page=null) {
		$username = preg_replace('/\s+/', '', $username);
		$username = str_replace('.', '', $username);
		return view('detail',['page'=>$page,'username'=>$username]);
	});

});
Route::group(['domain' => '{domain}'], function($domain=null)
{
	
    Route::any('/', function($domain)
    {
		if($domain==='www.klubsta.com'){
			return redirect('https://klubsta.com/');
		}
		if (strpos($domain, 'www.') !== false) {
			$domain=substr($domain,4);
		}
        return '<title>'.$domain.' - KLUBSTA | Taking you next level</title>'.view('fun',['username'=>$domain]);
    });
	Route::any('login', function()
    {
        return redirect('https://klubsta.com/login');
    });
	Route::any('/{page}', function($domain=null,$page=null){
		if($domain==='www.klubsta.com'){
			return redirect('https://klubsta.com/'.$page);
		}
		if (strpos($domain, 'www.') !== false) {
			$domain=substr($domain,4);
		}
        return $page;
    });
	Route::get('/{username}/{page}', function ($domain=null,$username=null,$page=null) {
		if($domain==='www.klubsta.com'){
			return redirect('https://klubsta.com/'.$username.'/'.$page);
		}
		if (strpos($domain, 'www.') !== false) {
			$domain=substr($domain,4);
		}
		$username = preg_replace('/\s+/', '', $username);
		$username = str_replace('.', '', $username);
		return view('detail',['page'=>$page,'username'=>$username]);
	});
});
