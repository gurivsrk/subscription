<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

 

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

///// Frontend Group 
Route::group(['as' => 'frontend.', 'namespace' => 'frontend'], function () {

	 Route::get('/', [App\Http\Controllers\frontend\homeController::class, 'index'])->name('index');
	 Route::get('/inner-page', [App\Http\Controllers\frontend\homeController::class, 'all_blogs'])->name('inner-page');	
	 /// blog
	Route::get('/all-blogs', [App\Http\Controllers\frontend\homeController::class, 'all_blogs'])->name('all-blog');
	Route::get('/all-blogs/{category}', [App\Http\Controllers\frontend\homeController::class, 'serach_by_cate'])->name('all-blog.cate');
	Route::get('/all-blogs/{blogId}/{blogslug}',[App\Http\Controllers\frontend\homeController::class, 'single_blog'])->name('blog');

	///mailing list
	Route::get('/email/{email}/unsubscribe',[App\Http\Controllers\frontend\homeController::class, 'unsubscribe'])->name('email.unsubscribe');

});

//// for testing mail function
// Route::get('/testmail',[App\Http\Controllers\subscribeController::class,'testEmail']);
// Route::get('/testmailview',function(){
// 	return view('email.subscribe',[
// 		'email'=>'emials@gmial.com',
// 		'email_content'=>'email content'
// 	]);
// });

Route::get('/auth/callback', 'App\Http\Controllers\Auth\SocialiteController@SocialLiteGithub');
// Route::get('/pending_email_verification',function(){
// 	echo 'Please verify your email first';
// })->name('verification.notice');
//////// Admin group

Auth::routes(['verify'=>true]);

Route::get('/auth/{redirect}','App\Http\Controllers\Auth\SocialiteController@SocialLiteLogin')->name('socialLogin');


// Route::get('/auth/callback', 'App\Http\Controllers\Auth\RegisterController@SocialLiteGithub');


Route::get('/vsrk-admin', 'App\Http\Controllers\HomeController@index')->name('vsrkAdmin')->middleware('auth');

Route::middleware(['isAdmin','auth'])->group(function () {

	///Other Common Functions
	Route::post('vsrk-admin/change-order',  'App\Http\Controllers\imageController@changeF')->name('vsrk-admin.changeOrder');
	Route::post('vsrk-admin/get-category',  'App\Http\Controllers\imageController@getCategoryF')->name('getCategory');
	
	/// Blog
	Route::patch('vsrk-admin/all-blogs/add-features',  'App\Http\Controllers\blogController@addFeatures')->name('blog.addFeatures');
	Route::resource('vsrk-admin/all-blogs',  'App\Http\Controllers\blogController');
	
	/// Categories And Tags
	Route::resource('vsrk-admin/cateTag',  'App\Http\Controllers\CategoryTagContoller');

	/// Team
	Route::resource('vsrk-admin/team', 'App\Http\Controllers\TeamController');
	
	/// testimonials
	Route::resource('vsrk-admin/testimonial', 'App\Http\Controllers\testimonialController');
	
	///// Form
	Route::resource('vsrk-admin/forms', 'App\Http\Controllers\FormController');
	
	///// Career
	Route::resource('vsrk-admin/career', 'App\Http\Controllers\CareerContoller');
	
	///// Subscriber
	Route::get('vsrk-admin/subscriber/sendMail', 'App\Http\Controllers\subscribeController@sendMail')->name('subcriber.sendMail');
	Route::post('vsrk-admin/subscriber/sendMail', 'App\Http\Controllers\subscribeController@send')->name('subcriber.sendMail');
	Route::get('vsrk-admin/subscriber/{email}/sendMail', 'App\Http\Controllers\subscribeController@sendMail')->name('subcriber.sendMail.single');
	Route::resource('vsrk-admin/subscriber', 'App\Http\Controllers\subscribeController');

	///// Menu
	Route::resource('vsrk-admin/menu', 'App\Http\Controllers\menuController')->only([
		'index','edit','update'
	]);

	///// Static Pages
	Route::resource('vsrk-admin/staticPages', 'App\Http\Controllers\staticPagesContoller')->only([
		'edit','update'
	]);
	
	///// Faqs
	Route::resource('vsrk-admin/faqs', 'App\Http\Controllers\faqsController');
	
	Route::resource('vsrk-admin/user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('vsrk-admin/profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::get('vsrk-admin/profile/{userId}/edit', 'App\Http\Controllers\ProfileController@editO')->name('profile.otherEdit');
	Route::put('vsrk-admin/profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('vsrk-admin/profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});

//user
Route::group(['middleware' => ['auth','verified'], 'as'=>'user.', 'namespace'=>'users'], function () {
	Route::get('/user/home', function(){
		return view('client.index');
		
	})->name('home');	
	Route::get('payment', [App\Http\Controllers\client\subscriptionController::class,'payment']);
	Route::get('payment/store', [App\Http\Controllers\client\subscriptionController::class,'storePayment']);
	route::get('subscribe/{package_id}',[App\Http\Controllers\client\subscriptionController::class, 'billing'])->name('subscribing');

});

