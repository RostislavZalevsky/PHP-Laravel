<?php

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
    return view('welcome');
});

Route::get('/user/{name?}',function($name = 'User'){
    echo "Name: ".$name;
});

Route::get('role', [
    'middleware' => 'Role:editor',
    'uses' => 'TestController@index',
]);

Route::get('terminate', [
    'middleware' => 'terminate',
    'uses' => 'ABCController@index',
]);

Route::get('/usercontroller/path', [
    'middleware' => 'First',
    'uses' => 'UserController@showPath'
]);

Route::resource('my', 'MyController');

//Route::controller('test','ImplicitController');

class MyClass{
    public $foo = 'bar';
}
Route::get('/myclass','ImplicitController@index');

Route::get('/foo/bar','UriController@index');

Route::get('/register', function (){
   return view('register');
});

Route::post('/user/register', array('uses'=>'UserRegistration@Registration'));

Route::get('/cookie/set', 'CookieController@setCookie');
Route::get('/cookie/get', 'CookieController@getCookie');

Route::get('/header',function(){
    return response("Hello!", 200)->header('Content-Type', 'text/html');
});

Route::get('/cookie',function(){
    return response("Hello", 200)->header('Content-Type', 'text/html')
        ->withcookie('name','Virat Gandhi');
});

Route::get('json',function(){
    return response()->json(['name' => 'Virat Gandhi', 'state' => 'Gujarat']);
});

Route::get('/test', function (){
    return view('test',['name'=>'Virat Gandhi']);
});

Route::get('/test2', function (){
    return view('test2');
});

Route::get('/test3', function (){
    return view('test3');
});

Route::get('blade', function () {
    return view('page',array('name' => 'Virat Gandhi'));
});