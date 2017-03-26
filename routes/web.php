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

Route::get('/' ,[
    	'uses' => 'UserController@welcome',
		'as' => 'welcome'
])->middleware('auth');

Route::get('/viewer', function () {
    return view('viewer');
})->name('pdf');

Route::get('/home', function(){
	return view('welcome');
})->name('home');

Route::get('/paypal', function(){
	return view('paywithpaypal1');
})->name('paypal');

Route::get('/loginView', function(){
	return view('loginView');
})->name('loginView');

Route::get('/registerView', function(){
	return view('registerView');
})->name('registerView');

Route::get('/forgotEmail', function(){
	return view('forgotEmail');
})->name('forgotEmail');


Route::post('/Dashboard', [
    	'uses' => 'UserController@adminSignIn',
		'as' => 'adminSignIn'
		]);
Route::post('/emailCheck', [
    	'uses' => 'UserController@emailCheck',
		'as' => 'emailCheck'
		]);
		
Route::get('admin/admindashboard', [
    	'uses' => 'UserController@admindashboard',
		'as' => 'admin/admindashboard'
		])->middleware('auth');
		
Route::post('/login', [
		'uses' => 'UserController@logIn',
		'as' => 'login'
		]);
		
Route::get('/signout', [
		'uses' => 'UserController@signout',
		'as' => 'signout'
		]);
		
Route::post('/changePass', [
		'uses' => 'UserController@changePass',
		'as' => 'changePass'
		]);	
				
Route::post('/changeName', [
		'uses' => 'UserController@changeName',
		'as' => 'changeName'
		]);	

Route::post('/addImage', [
    	'uses' => 'UserController@addImage',
		'as' =>'addImage'
		]);

Route::get('/verifyMail/{data?}',[
    'uses' => 'UserController@verifyMail',
    'as' => 'verifyMail',
	'middleware' => 'email'
	]);

Route::get('/pay', function(){
    return view('paywithpaypal');
})->name('pay');

	///////////////////////////////////////////////
Route::get('/forgotPass', function(){
		return view('forgotPass');
		})->name('forgotPass');



Route::post('/forgot', [
		'uses' => 'UserController@forgot',
		'as' => 'forgot'
		]);

Route::get('/forgotPassword/{data?}',[
    'uses' => 'UserController@forgotPassword',
    'as' => 'forgotPassword',
	'middleware' => 'email'
	]);

Route::post('/forgotFinal', [
		'uses' => 'UserController@forgotFinal',
		'as' => 'forgotFinal'
		]);	


////////////////////////////////Admin Routes//////////////////////////////////////////////////////

/*
display Add money lender interface
*/
Route::get('admin/lenderAdd', function(){
    return view('admin/lenderAdd');
})->name('admin/lenderAdd');

/*
display Add city interface
*/
Route::get('admin/addCity', function(){
    return view('admin/addCity');
})->name('admin/addCity');

Route::get('admin/message', function(){
    return view('admin/message');
})->name('admin/message');

/*
display Add Advisor interface
*/
//Route::get('/advisorAdd', function(){
 //   return view('advisorAdd');
//})->name('advisorAdd');

/*
display Add Auction interface
*/
Route::get('admin/addAuction', function(){
    return view('admin/addAuction');
})->name('admin/addAuction');

/*
direct to get advisor details via usercontrooler
*/
Route::get('admin/getAdvisor',[
    'uses' => 'AdminController@getAdvisor',
    'as' => 'getAdvisor'
]);

/*
direct to get Money Lender details via usercontrooler
*/
Route::get('admin/getLender',[
    'uses' => 'AdminController@getLender',
    'as' => 'getLender'
]);

/*
direct to edit advisor details via usercontrooler
*/
Route::get('/editUser/{id}', [
    'uses' => 'AdminController@editUser',
    'as' => 'editUser'
]);
/*
direct to edit Lender details via usercontrooler
*/
Route::get('/editLender/{id}', [
    'uses' => 'AdminController@editLender',
    'as' => 'editLender'
]);



/*
save Advisor details to the database
*/
Route::post('/savelegal', [
		'uses' => 'AdminController@savelegal',
		'as' => 'savelegal'
		]);


/*
save money lender details to the database
*/
Route::post('/savelender', [
    'uses' => 'AdminController@savelender',
    'as' => 'savelender'
]);

/*
save city details to the database
*/
Route::post('/saveCity', [
    'uses' => 'AdminController@saveCity',
    'as' => 'saveCity'
]);

Route::post('/sendEdit', [
    'uses' => 'AdminController@sendEdit',
    'as' => 'sendEdit'
]);

Route::post('/sendLender', [
    'uses' => 'AdminController@sendLender',
    'as' => 'sendLender'
]);

Route::post('/sendMessage', [
    'uses' => 'AdminController@sendMessage',
    'as' => 'sendMessage'
]);

/**
 * ************************************Seller Routes
 */

/**
 * seller login
 */
Route::get('/loginSeller', function(){
    return view('seller/loginSeller');
})->name('loginSeller');

/**
 * seller Register view
 */
Route::get('/registerSeller', function(){
    return view('seller/registerSeller');
})->name('registerSeller');

/**
 * seller Registering
 */
Route::post('/sellerRegister', [
    'uses' => 'SellerController@sellerRegister',
    'as' => 'sellerRegister'
]);

/**
 * Return seller view
 */
Route::get('/sellerdashboard', function(){
    return view('seller/sellerdashboard');
})->name('sellerdashboard');

/**
 * Return view add property
 */
Route::get('/addproperty', function(){
    return view('seller/property');
})->name('addproperty');

/////////////////////////////////////////////////
	
Route::get('paypalmessage', array('as' => 'paypalmessage','uses' => 'AddMoneyController@payWithPaypal',));
Route::post('addmoney/paypal', array('as' => 'addmoney.paypal','uses' => 'AddMoneyController@postPaymentWithpaypal',));
Route::get('addmoney/paypal', array('as' => 'payment.status','uses' => 'AddMoneyController@getPaymentStatus',));