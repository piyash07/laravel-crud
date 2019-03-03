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
//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('home-page', 'aboutController@home_page');

//----------------------------------------------------//  

//----------------------------------------------------//

Route::get('main-page','aboutController@layoutpage');


//----------login route

Route::get('/backend',function(){
	return view('admin.admin_login');
});
Route::get('stud_login','aboutController@loginPage');



//-------------

Route::get('/backend','adminController@backfunction');
Route::get('/admin_dashboard','adminController@admin_dashboard')->middleware('auth');
// Route::post('/adminlogin','adminController@login_dashboard');
// Route::post('/logout','adminController@logout');

Route::get('about-page', 'aboutController@abouts_page');
Route::post('about_page','aboutController@about_page');

Route::get('teachers-page', 'aboutController@teachers_page');
Route::get('students-page', 'aboutController@students_page');


Route::get('courses-page','aboutController@courses_page');
Route::get('reviews-page', 'aboutController@reviews_page');

Route::get('contact-page','aboutController@contacts_page');
Route::post('contact_page','aboutController@contact_page');

//<-----------retrive data----------------->

Route::get('showdata-page','StudViewController@index');
Route::get('ViewAbouts-data','StudViewController@tree');

//<-------------update and edit--------------------->
Route::get('edit-records','StudUpdateController@index');
Route::get('edit/{id}','StudUpdateController@show');
Route::post('edit/{id}','StudUpdateController@edit');
//delete data
Route::get('delete-records','StudDeleteController@index');
Route::get('delete/{id}','StudDeleteController@destroy'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
