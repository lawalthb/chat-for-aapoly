<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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



	Route::get('', 'IndexController@index')->name('index');
	Route::get('index/login', 'IndexController@login')->name('login');
	
	
	
	Route::post('auth/login', 'AuthController@login')->name('auth.login');
	Route::any('auth/logout', 'AuthController@logout')->name('logout')->middleware(['auth']);

	Route::get('auth/accountcreated', 'AuthController@accountcreated')->name('accountcreated');
	Route::get('auth/accountpending', 'AuthController@accountpending')->name('accountpending');
	Route::get('auth/accountblocked', 'AuthController@accountblocked')->name('accountblocked');
	Route::get('auth/accountinactive', 'AuthController@accountinactive')->name('accountinactive');


	
	Route::post('auth/login', 'AuthController@login')->name('auth.login');
	Route::get('auth/password/forgotpassword', 'AuthController@showForgotPassword')->name('password.forgotpassword');
	Route::post('auth/password/sendemail', 'AuthController@sendPasswordResetLink')->name('password.email');
	Route::get('auth/password/reset', 'AuthController@showResetPassword')->name('password.reset.token');
	Route::post('auth/password/resetpassword', 'AuthController@resetPassword')->name('password.resetpassword');
	Route::get('auth/password/resetcompleted', 'AuthController@passwordResetCompleted')->name('password.resetcompleted');
	Route::get('auth/password/linksent', 'AuthController@passwordResetLinkSent')->name('password.resetlinksent');
	

/**
 * All routes which requires auth
 */
Route::middleware(['auth'])->group(function () {
		
	Route::get('home', 'HomeController@index')->name('home');

	

/* routes for Admins Controller */	
	Route::get('admins', 'AdminsController@index')->name('admins.index');
	Route::get('admins/index', 'AdminsController@index')->name('admins.index');
	Route::get('admins/index/{filter?}/{filtervalue?}', 'AdminsController@index')->name('admins.index');	
	Route::get('admins/view/{rec_id}', 'AdminsController@view')->name('admins.view');	
	Route::any('account/edit', 'AccountController@edit')->name('account.edit');	
	Route::get('account', 'AccountController@index');	
	Route::post('account/changepassword', 'AccountController@changepassword')->name('account.changepassword');	
	Route::get('admins/add', 'AdminsController@add')->name('admins.add');
	Route::post('admins/store', 'AdminsController@store')->name('admins.store');
		
	Route::any('admins/edit/{rec_id}', 'AdminsController@edit')->name('admins.edit');	
	Route::get('admins/delete/{rec_id}', 'AdminsController@delete');

/* routes for Departments Controller */	
	Route::get('departments', 'DepartmentsController@index')->name('departments.index');
	Route::get('departments/index', 'DepartmentsController@index')->name('departments.index');
	Route::get('departments/index/{filter?}/{filtervalue?}', 'DepartmentsController@index')->name('departments.index');	
	Route::get('departments/view/{rec_id}', 'DepartmentsController@view')->name('departments.view');	
	Route::get('departments/add', 'DepartmentsController@add')->name('departments.add');
	Route::post('departments/store', 'DepartmentsController@store')->name('departments.store');
		
	Route::any('departments/edit/{rec_id}', 'DepartmentsController@edit')->name('departments.edit');	
	Route::get('departments/delete/{rec_id}', 'DepartmentsController@delete');

/* routes for Faq Controller */	
	Route::get('faq', 'FaqController@index')->name('faq.index');
	Route::get('faq/index', 'FaqController@index')->name('faq.index');
	Route::get('faq/index/{filter?}/{filtervalue?}', 'FaqController@index')->name('faq.index');	
	Route::get('faq/view/{rec_id}', 'FaqController@view')->name('faq.view');	
	Route::get('faq/add', 'FaqController@add')->name('faq.add');
	Route::post('faq/store', 'FaqController@store')->name('faq.store');
		
	Route::any('faq/edit/{rec_id}', 'FaqController@edit')->name('faq.edit');	
	Route::get('faq/delete/{rec_id}', 'FaqController@delete');

/* routes for Inboxes Controller */	
	Route::get('inboxes', 'InboxesController@index')->name('inboxes.index');
	Route::get('inboxes/index', 'InboxesController@index')->name('inboxes.index');
	Route::get('inboxes/index/{filter?}/{filtervalue?}', 'InboxesController@index')->name('inboxes.index');	
	Route::get('inboxes/view/{rec_id}', 'InboxesController@view')->name('inboxes.view');	
	Route::get('inboxes/add', 'InboxesController@add')->name('inboxes.add');
	Route::post('inboxes/store', 'InboxesController@store')->name('inboxes.store');
		
	Route::any('inboxes/edit/{rec_id}', 'InboxesController@edit')->name('inboxes.edit');	
	Route::get('inboxes/delete/{rec_id}', 'InboxesController@delete');

/* routes for Jobs Controller */	
	Route::get('jobs', 'JobsController@index')->name('jobs.index');
	Route::get('jobs/index', 'JobsController@index')->name('jobs.index');
	Route::get('jobs/index/{filter?}/{filtervalue?}', 'JobsController@index')->name('jobs.index');	
	Route::get('jobs/view/{rec_id}', 'JobsController@view')->name('jobs.view');	
	Route::get('jobs/add', 'JobsController@add')->name('jobs.add');
	Route::post('jobs/store', 'JobsController@store')->name('jobs.store');
		
	Route::any('jobs/edit/{rec_id}', 'JobsController@edit')->name('jobs.edit');	
	Route::get('jobs/delete/{rec_id}', 'JobsController@delete');

/* routes for Languages Controller */	
	Route::get('languages', 'LanguagesController@index')->name('languages.index');
	Route::get('languages/index', 'LanguagesController@index')->name('languages.index');
	Route::get('languages/index/{filter?}/{filtervalue?}', 'LanguagesController@index')->name('languages.index');	
	Route::get('languages/view/{rec_id}', 'LanguagesController@view')->name('languages.view');	
	Route::get('languages/add', 'LanguagesController@add')->name('languages.add');
	Route::post('languages/store', 'LanguagesController@store')->name('languages.store');
		
	Route::any('languages/edit/{rec_id}', 'LanguagesController@edit')->name('languages.edit');	
	Route::get('languages/delete/{rec_id}', 'LanguagesController@delete');

/* routes for Messages Controller */	
	Route::get('messages', 'MessagesController@index')->name('messages.index');
	Route::get('messages/index', 'MessagesController@index')->name('messages.index');
	Route::get('messages/index/{filter?}/{filtervalue?}', 'MessagesController@index')->name('messages.index');	
	Route::get('messages/view/{rec_id}', 'MessagesController@view')->name('messages.view');
	Route::get('messages/masterdetail/{rec_id}', 'MessagesController@masterDetail')->name('messages.masterdetail');	
	Route::get('messages/add', 'MessagesController@add')->name('messages.add');
	Route::post('messages/store', 'MessagesController@store')->name('messages.store');
		
	Route::any('messages/edit/{rec_id}', 'MessagesController@edit')->name('messages.edit');	
	Route::get('messages/delete/{rec_id}', 'MessagesController@delete');	
	Route::get('messages/chat', 'MessagesController@chat');
	Route::get('messages/chat/{filter?}/{filtervalue?}', 'MessagesController@chat');

/* routes for Suggestions Controller */	
	Route::get('suggestions', 'SuggestionsController@index')->name('suggestions.index');
	Route::get('suggestions/index', 'SuggestionsController@index')->name('suggestions.index');
	Route::get('suggestions/index/{filter?}/{filtervalue?}', 'SuggestionsController@index')->name('suggestions.index');	
	Route::get('suggestions/view/{rec_id}', 'SuggestionsController@view')->name('suggestions.view');	
	Route::get('suggestions/delete/{rec_id}', 'SuggestionsController@delete');

/* routes for Users Controller */	
	Route::get('users', 'UsersController@index')->name('users.index');
	Route::get('users/index', 'UsersController@index')->name('users.index');
	Route::get('users/index/{filter?}/{filtervalue?}', 'UsersController@index')->name('users.index');	
	Route::get('users/view/{rec_id}', 'UsersController@view')->name('users.view');	
	Route::any('users/edit/{rec_id}', 'UsersController@edit')->name('users.edit');	
	Route::get('users/delete/{rec_id}', 'UsersController@delete');

/* routes for Websockets_Statistics_Entries Controller */	
	Route::get('websockets_statistics_entries', 'Websockets_Statistics_EntriesController@index')->name('websockets_statistics_entries.index');
	Route::get('websockets_statistics_entries/index', 'Websockets_Statistics_EntriesController@index')->name('websockets_statistics_entries.index');
	Route::get('websockets_statistics_entries/index/{filter?}/{filtervalue?}', 'Websockets_Statistics_EntriesController@index')->name('websockets_statistics_entries.index');	
	Route::get('websockets_statistics_entries/view/{rec_id}', 'Websockets_Statistics_EntriesController@view')->name('websockets_statistics_entries.view');	
	Route::get('websockets_statistics_entries/add', 'Websockets_Statistics_EntriesController@add')->name('websockets_statistics_entries.add');
	Route::post('websockets_statistics_entries/store', 'Websockets_Statistics_EntriesController@store')->name('websockets_statistics_entries.store');
		
	Route::any('websockets_statistics_entries/edit/{rec_id}', 'Websockets_Statistics_EntriesController@edit')->name('websockets_statistics_entries.edit');	
	Route::get('websockets_statistics_entries/delete/{rec_id}', 'Websockets_Statistics_EntriesController@delete');
});

	
	Route::get('messages/get_user_chat', 'messagesController@get_user_chat')->name('messages.get_user_chat')->middleware(['auth']);
	
Route::get('componentsdata/admins_email_value_exist',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->admins_email_value_exist($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/last_message_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->last_message_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/department_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->department_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/language_id_option_list',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->language_id_option_list($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/getcount_inboxes',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->getcount_inboxes($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/getcount_chat',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->getcount_chat($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/getcount_agents',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->getcount_agents($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/getcount_faq',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->getcount_faq($request);
	}
)->middleware(['auth']);
	
Route::get('componentsdata/barchart_chatschart',  function(Request $request){
		$compModel = new App\Models\ComponentsData();
		return $compModel->barchart_chatschart($request);
	}
)->middleware(['auth']);


Route::post('fileuploader/upload/{fieldname}', 'FileUploaderController@upload');
Route::post('fileuploader/s3upload/{fieldname}', 'FileUploaderController@s3upload');
Route::post('fileuploader/remove_temp_file', 'FileUploaderController@remove_temp_file');


/**
 * All static content routes
 */
Route::get('info/about',  function(){
		return view("pages.info.about");
	}
);
Route::get('info/faq',  function(){
		return view("pages.info.faq");
	}
);

Route::get('info/contact',  function(){
	return view("pages.info.contact");
}
);
Route::get('info/contactsent',  function(){
	return view("pages.info.contactsent");
}
);

Route::post('info/contact',  function(Request $request){
		$request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required'
		]);

		$senderName = $request->name;
		$senderEmail = $request->email;
		$message = $request->message;

		$receiverEmail = config("mail.from.address");

		Mail::send(
			'pages.info.contactemail', [
				'name' => $senderName,
				'email' => $senderEmail,
				'comment' => $message
			],
			function ($mail) use ($senderEmail, $receiverEmail) {
				$mail->from($senderEmail);
				$mail->to($receiverEmail)
					->subject('Contact Form');
			}
		);
		return redirect("info/contactsent");
	}
);


Route::get('info/features',  function(){
		return view("pages.info.features");
	}
);
Route::get('info/privacypolicy',  function(){
		return view("pages.info.privacypolicy");
	}
);
Route::get('info/termsandconditions',  function(){
		return view("pages.info.termsandconditions");
	}
);

Route::get('info/changelocale/{locale}', function ($locale) {
	app()->setlocale($locale);
	session()->put('locale', $locale);
    return redirect()->back();
})->name('info.changelocale');