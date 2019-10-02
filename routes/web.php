<?php
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use App\Mail\RequestConsultation;
use Illuminate\Support\Facades\Mail;
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

 
Route::view('/', 'welcome');
Route::get('/', function () {
    return view('welcome')->with('success', '');
});

Route::get('/lang/{locale}', function ($locale) {
    App::setLocale($locale);
    return view('welcome')->with('success', '');
   
});
// Route::get('/{locale}', 'LangController@setLocale');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/writer', 'Auth\LoginController@showWriterLoginForm');
// Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/writer', 'Auth\RegisterController@showWriterRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/writer', 'Auth\LoginController@writerLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::post('/register/writer', 'Auth\RegisterController@createWriter');

Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
Route::group(['middleware' => 'auth:writer'], function () {
    Route::view('/writer', 'writer');
});

// Route::get('/contact', function(){
//     return view('contact')->with('success', '');
// })->name('contact');
Route::post('/contact', function(Request $request){
    // Mail::send(new ContactMail($request));
    Mail::to('moronomax@gmail.com')->send(new ContactMail($request));
    return view('welcome')->with('success','yes');
    // return redirect('/');
})->name('contact');

Route::get('/users', 'UsersController@index')->name('users');
Route::get('/users/create', 'UsersController@create')->name('usersCreate');
Route::post('/users/store', 'UsersController@store')->name('usersStore');
Route::get('/users/{id}/edit', 'UsersController@edit')->name('usersEdit');
Route::patch('/users/{id}/update', 'UsersController@update')->name('usersUpdate');
Route::delete('/users/destory/{id}', 'UsersController@destroy')->name('usersDestroy');
