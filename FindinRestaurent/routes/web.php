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

// Route::get('/', function () {
//     return view('home_page');
// });
// Route::get('/home', function () {
//     return view('home_page');
// });
// Route::get('/', function () {
//     return view('welcome');
// });

// Auth::routes();
Route::get('/','HomeController@index')->name('Home');
Route::get('/login','LoginController@loginView')->name('Login');
Route::post('/login','LoginController@checkLogin');

Route::get('/register','LoginController@registrationView')->name('Register');
Route::post('/register','LoginController@registration');
// Route::post('/registration','LoginController@checkRegistration');
//user section

Route::get('/user_dashboard','UserController@userDashboard')->name('User_Dashboard');
Route::get('/restaurent-menus/{restaurent_id}}','UserController@seeMenus')->name('Menus');

//end of user section

Route::get('/home','LoginController@logout')->name('Logout');
//Admin section..
Route::get('/admin-dashboard','AdminController@index')->name('Admin_Dashboard');
Route::get('/location','AdminController@getLocation')->name('Location');
Route::post('/location','AdminController@postLocation');

Route::get('/all-restaurent','AdminController@getRestaurent')->name('Restaurent');
Route::get('/add-resstaurent','AdminController@addRestaurent')->name('AddRestaurent');
Route::post('/add-resstaurent','AdminController@postRestaurent');

Route::get('/createUser','UserController@createUser')->name('CreateUser');
Route::post('/createUser','UserController@storeUser');

//end of admin section
//Restaurents owner section
Route::get('/restaurent_owner_dashboard','UserController@restaurent_owner_index')->name('Restaurent_owner_Dashboard');
Route::post('/restaurent_owner_dashboard','UserController@addItem');
Route::get('/menu-list','UserController@menu')->name('Menu');


//end of restaurent owner section..
