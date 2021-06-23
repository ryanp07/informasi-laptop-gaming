<?php

use GuzzleHttp\Middleware;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/about', function () {
//     $nama = 'gopal';
//     return view('about', ['nama' => $nama]);
// });
//username : ryan
//pw : qwer1234

//Main Content
Route::get('/', 'PagesController@beranda');
Route::get('/sejarah', 'PagesController@sejarah');    
Route::get('/tim', 'PagesController@indextim');
// Route::get('/tentang', 'PagesController@tentang');
//Menampilkan Masing-masing laptop di stiap brand
Route::get('/asus', 'PagesController@indexasus');
Route::get('/acer', 'PagesController@indexacer');
Route::get('/gigabyte', 'PagesController@indexgiga');
Route::get('/hp', 'PagesController@indexhp');
Route::get('/legion', 'PagesController@indexleno');
Route::get('/msi', 'PagesController@indexmsi');
//Menampilkan Game dan Rank Laptop
Route::get('/pubg', 'PagesController@indexpubg');
Route::get('/forza', 'PagesController@indexforza');
Route::get('/gtav', 'PagesController@indexgtav');
Route::get('/fifa19', 'PagesController@indexfifa19');

//dashboard admin
Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', 'PagesController@indexdashmain');
});

//inti dari semua laptop
Route::get('/laptop', 'LaptopsController@index');
Route::get('/laptop/{laptop}', 'LaptopsController@show');

// login
Route::get('/loginadm', 'LogsController@index')->name('loginadm');
Route::post('/postlogin', 'LogsController@postlogin');
Route::get('/logoutadm', 'LogsController@logout');

// admin data lepy
Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboardlepy', 'AdminLepysController@index');
    Route::get('/dashboardlepy/create', 'AdminLepysController@create'); 
    Route::post('/dashboardlepy', 'AdminLepysController@store'); 
    Route::delete('/dashboardlepy/{laptop}', 'AdminLepysController@destroy'); 
    Route::get('/dashboardlepy/{laptop}/edit', 'AdminLepysController@edit'); 
    Route::patch('/dashboardlepy/{laptop}', 'AdminLepysController@update');
// Route::resource('dashboardlepy', 'AdminsController');
});


//admin data tim
Route::group(['middleware'=>'auth'], function(){
    // Route::get('/dashboardtour', 'TimsController@indextour');
    Route::get('/dashboardtim', 'AdminTimsController@index');
    Route::get('/dashboardtim/create', 'AdminTimsController@create'); 
    Route::post('/dashboardtim', 'AdminTimsController@store');
    Route::get('/dashboardtim/{tim}/edit', 'AdminTimsController@edit');  
    Route::delete('/dashboardtim/{tim}', 'AdminTimsController@destroy');
    Route::patch('/dashboardtim/{tim}', 'AdminTimsController@update');
});

//kalo mau regis admin jngn di komentarin lalu akses /login
Auth::routes();


//Nampilin Laptop Acer
// Route::get('/acer/{acer}', 'PagesController@show');

//Nampilin Laptop Asus
// Route::get('/asus/{rog}', 'RogsController@show');

//Nampilin Laptop Gigabyte
// Route::get('/gigabyte/{gigabyte}', 'GigabytesController@show');

//Nampilin Laptop Hp Omen
// Route::get('/hp/{omen}', 'OmensController@show');

//Nampilin Laptop Lenovo
// Route::get('/legion/{legion}', 'LegionsController@show');


//Nampilin Laptop MSI
// Route::get('/msi/{msi}', 'MsiController@show');






// Route::get('/home', 'HomeController@index')->name('home');

