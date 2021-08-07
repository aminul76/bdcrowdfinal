<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

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

Route::get('/', 'HomeController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
Route::get('/invest', 'homeController@invest')->name('invest');
Route::get('/about', 'homeController@about')->name('about');
Route::get('/contact', 'homeController@contact')->name('contact');
Route::get('/details/{id}','HomeController@investdetails')->name('investdetails');

//User Payment
	Route::get('/applyform','HomeController@applyform')->name('frontend.applyform');

	Route::post('/storeapplyform','HomeController@storeapplyform')->name('frontend.storeapplyform');

	Route::post('/storeinvest','HomeController@storeinvest')->name('frontend.storeinvest');


	Route::get('/sms','HomeController@sms')->name('frontend.sms');


// ------------------- user Route ---------------------------
Route::group(['middleware'=>['auth','user']], function (){
	
	Route::get('/home','HomeController@home')->name('user.dashboard'); 	
	Route::get('user/dashbord', 'UserController@dashbord')->name('user.mydashboard');
	Route::get('user/edite/profile', 'UserController@editeprofile')->name('user.edit.profile');
	//profile Update
	Route::post('user/edite/profile/update/{id}', 'UserController@updateprofile')->name('user.update.profile');
	//Account Update


	//intersted
	Route::post('/storeinvest','UserController@storeinterst')->name('user.storeinterst');
	//password change
	Route::put('password-update','SettingsController@updatePassword')->name('password.update');

	
});


// ---------------------- admin Route ------------------------
Route::group(['middleware'=>['auth','admin']], function (){
	

	//---------------------------- page route -----------------------
	Route::get('admin','AdminController@home')->name('admin.dashboard'); 
	Route::get('admin/projects','AdminController@projects')->name('admin.projects');

	Route::get('admin/basic','AdminController@basic')->name('admin.basic');

	// ------------------project upload route -----------------------
	Route::post('admin/basic/store','ProductController@store')->name('project.store');
	//update edit
	Route::get('admin/basic/edit/{id}','ProductController@edit')->name('project.edit');

	//update update
	Route::post('admin/basic/update/{id}','ProductController@update')->name('project.update');

	
	//update delete
	Route::post('admin/basic/delete/{id}','ProductController@delete')->name('project.delete');



	//overview view
	Route::get('admin/overview','AdminController@overview')->name('admin.overview');
	//overview search
	Route::get('admin/overviewget','AdminController@overviewget')->name('admin.overviewget');
	//overview store
	Route::post('admin/overviewstore/{id}','AdminController@overviewstore')->name('admin.overviewstore');
	//details details
	Route::get('admin/details','AdminController@details')->name('admin.details');
	//overview search
	Route::get('admin/detailsget','AdminController@detailsget')->name('admin.detailsget');
	//details store
	Route::post('admin/detailsstore/{id}','AdminController@detailsstore')->name('admin.detailsstore');



	//location view
	Route::get('admin/location','AdminController@location')->name('admin.location');
	//location search
	Route::get('admin/locationget','AdminController@locationget')->name('admin.locationget');
	//location store
	Route::post('admin/locationstore/{id}','AdminController@locationstore')->name('admin.locationstore');
	




	//faq view
	Route::get('admin/faq','AdminController@faq')->name('admin.faq');
	//faq search
	Route::get('admin/faqget','AdminController@faqget')->name('admin.faqget');

	//faq store
	Route::post('admin/faqstore','AdminController@faqstore')->name('admin.faqstore');
	
	//faq delete
	Route::post('admin/faqdelete/{id}','AdminController@faqdelete')->name('admin.faqdelete');



	Route::get('admin/update','AdminController@update')->name('admin.update');
	//faq search
	Route::get('admin/updateget','AdminController@updateget')->name('admin.updateget');

	//update store
	Route::post('admin/updatestore','AdminController@updatestore')->name('admin.updatestore');
	
	//update delete
	Route::post('admin/updatedelete/{id}','AdminController@updatedelete')->name('admin.updatedelete');


	//Pending Payment
	Route::get('pending/payment','AdminController@pendingpayment')->name('admin.pendingpayment');
	//Compelete Payment
	Route::get('compelete/payment','AdminController@compeletepayment')->name('admin.compeletepayment');
	//payment check
	Route::post('admin/payment/{id}','AdminController@paid')->name('admin.payment.status');
	//payment delete
	Route::post('admin/paymentdelete/{id}','AdminController@paymentdelete')->name('paymentdelete');

	//admin payment
	Route::post('/adminstoreinvest','AdminController@adminstoreinvest')->name('adminstoreinvest');

	//Member 
	Route::resource('amin/member','Userinfomation');



	Route::get('admin/profile-update','SettingsController@changepassword')->name('admin.changepassword');
    Route::put('admin/password-update','SettingsController@updatePassword')->name('password.update');

		
});



