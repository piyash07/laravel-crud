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

Route::get('/','adminController@logout');


Route::get('/backend','adminController@backfunction');
Route::get('/admin_dashboard','adminController@admin_dashboard')->middleware('auth');
// Route::post('/adminlogin','adminController@login_dashboard');
Route::post('/logout','adminController@logout');

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
//----------------------------------------------------------
//----------------------------------------------------------
//AdmissionController
Route::get('/admission','AdmissionController@admission');
Route::get('/new-admission','AdmissionController@new_admission');
Route::get('/manage-admission','AdmissionController@manage_admission');

//notice_board 
Route::get('/noticeboard','NoticeBoardController@notice_board');
Route::get('/add-notice','NoticeBoardController@add_notice');
Route::get('/manage-notice','NoticeBoardController@manage_notice');

//----- addstudents
Route::get('/addstudent','AddstudentsController@addstudents');
//allstudents
Route::get('/allstudents','allstudentController@allstudents');

Route::get('/tutionfees','tutionsController@tutionfees');

//StudentPortal
Route::get('/studentportal','StudentPortalController@portal');

Route::get('/student-dashboard','StudentPortalController@student_dashboard');
Route::get('/profile','StudentPortalController@profile');
Route::get('/update-profile','StudentPortalController@update_profile');
Route::get('/password-change','StudentPortalController@password_change');
Route::get('/payment-ledger','StudentPortalController@payment_ledger');
Route::get('/payment-schema','StudentPortalController@payment_schema');
Route::get('/tution-fees','StudentPortalController@tution_fees');
Route::get('/drop-session','StudentPortalController@drop_session');
Route::get('/register-courses','StudentPortalController@register_courses');
Route::get('/routine','StudentPortalController@student_routine');
Route::get('/live-result','StudentPortalController@live_result');
Route::get('/exam-clearance','StudentPortalController@exam_clearance');
Route::get('/transcript','StudentPortalController@transcript');
Route::get('/result','StudentPortalController@result');
Route::get('/application','StudentPortalController@application');
Route::get('/logout','StudentPortalController@logout');

//course controller
Route::get('/','coursesController@courses');

Route::get('/swe','SWEController@swe');
Route::get('/cse','CSEController@cse');
Route::get('/eee','EEEController@eee');
Route::get('/bba','BBAController@bba');

Route::get('/','teachersController@');

Route::get('/','testimonialController@');

Route::get('/','institutionGalleryController@');

Route::get('/','institutionBoardController@');


















