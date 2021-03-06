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

use App\Notifications\testcompleted;

Auth::routes();




Route::group(['prefix'=> 'administrator','namespace'=>'Backend','middleware'=>'admin'],function(){

    //MAIN PAGE 
    Route::get('/', 'MainController@MainPage');

    //DASHBOARD 

    Route::get('/', 'DashboardController@index')->name('admin.dashboard');


     //USERS ROUTES
    Route::get('/users','UsersController@index')->name('admin.users.list');
    Route::get('/users/create', 'UsersController@create')->name('admin.users.create');
    Route::post('/users/store', 'UsersController@store')->name('admin.users.store');
    Route::get('/users/delete/{user_id}', 'UsersController@delete')->name('admin.users.delete');
    Route::get('/users/edit/{user_id}', 'UsersController@edit')->name('admin.users.edit');
    Route::post('/users/update/{user_id}', 'UsersController@update')->name('admin.users.update');
    Route::get('/users/packages/{user_id}', 'UsersController@packages')->name('admin.users.packages');

    //FILES ROUTES 
    Route::get('/files', 'FilesController@index')->name('admin.files.list');

    Route::get('/files/create', 'FilesController@create')->name('admin.files.create');

    Route::post('/files/create', 'FilesController@store')->name('admin.files.store');
    Route::get('/files/edit/{file_id}', 'FilesController@edit')->name('admin.files.edit');
    Route::post('/files/update/{file_id}', 'FilesController@update')->name('admin.files.update');
    Route::get('/files/delete/{file_id}', 'FilesController@delete')->name('admin.files.delete');


    //PLANS  ROUTES 

    Route::get('/plans', 'PlansController@index')->name('admin.plans.list');
    Route::get('/plans/create', 'PlansController@create')->name('admin.plans.create');
    Route::post('/plans/create', 'PlansController@store')->name('admin.plans.store');
    Route::get('/plans/edit/{plan_id}', 'PlansController@edit')->name('admin.plans.edit');
    Route::post('/plans/update/{plan_id}', 'PlansController@update')->name('admin.plans.update');
    Route::get('/plans/delete/{plan_id}', 'PlansController@delete')->name('admin.plans.delete');

    //PACKAGES  ROUTES 

    Route::get('/packages', 'PackagesController@index')->name('admin.packages.list');
    Route::get('/packages/create', 'PackagesController@create')->name('admin.packages.create');
    Route::post('/packages/create', 'PackagesController@store')->name('admin.packages.store');
    Route::get('/packages/edit/{package_id}', 'PackagesController@edit')->name('admin.packages.edit');
    Route::post('/packages/update/{package_id}', 'PackagesController@update')->name('admin.packages.update');
    Route::get('/packages/delete/{package_id}', 'PackagesController@delete')->name('admin.packages.delete');
    Route::get('/packages/sync_files/{package_id}', 'PackagesController@syncFiles')->name('admin.packages.sync_files');
    Route::post('/packages/sync_files/{package_id}', 'PackagesController@updateSyncFiles')->name('admin.packages.sync_files');
    

    //PAYMENTS  ROUTES 

    Route::get('/payments', 'PaymentController@index')->name('admin.payments.list');
  
    Route::get('/payments/delete/{payment_id}', 'PaymentController@delete')->name('admin.payments.delete');

    //CATEGORIES  ROUTES 
    Route::get('/categories/sample', 'CategoriesController@sample')->name('admin.categories.sample');
    Route::get('/categories', 'CategoriesController@index')->name('admin.categories.list');
    Route::get('/categories/create', 'CategoriesController@create')->name('admin.categories.create');
    Route::post('/categories/create', 'CategoriesController@store')->name('admin.categories.store');
    Route::get('/categories/edit/{categories_id}', 'CategoriesController@edit')->name('admin.categories.edit');
    Route::post('/categories/update/{categories_id}', 'CategoriesController@update')->name('admin.categories.update');
    Route::get('/categories/delete/{categories_id}', 'CategoriesController@delete')->name('admin.categories.delete');

   
    //BOOKS 
    Route::resource('/books', 'BookController');

    //VIDEOS
    Route::resource('/videos', 'VideoController');


    //COMMENTS 
    Route::get('/comments','CommentController@index')->name('admin.comment.index');
    Route::get('comments/{id}', 'CommentController@edit')->name('admin.comments.edit');
    Route::post('comments/{id}', 'CommentController@actions')->name('comments.actions');
    Route::patch('comments/{id}', 'CommentController@update')->name('admin.comments.update');
    Route::delete('comments/{id}', 'CommentController@destroy')->name('admin.comments.destroy');


    //ORDERS 

    Route::get('orders', 'OrderController@index')->name('admin.orders.index');
    Route::get('orders/lists/{id}', 'OrderController@getOrderLists')->name('orders.lists');


    //BLOG POSTS
    
    Route::resource('posts', 'PostController');


    //BLOG UPLOAD 

    //Route::get('photos/upload', 'PhotoController@upload')->name('photos.upload');
    Route::resource('photos', 'PhotoController');

    //TICKETS
    Route::get('new_ticket', 'TicketsController@create')->name('tickets.create');
    Route::post('new_ticket', 'TicketsController@store')->name('tickets.save');

    Route::get('my_tickets', 'TicketsController@userTickets')->name('tickets.show');
    Route::get('tickets/{ticket_id}', 'TicketsController@show');
});




//FRONTEND ROUTES




Route::group(['namespace'=>'Frontend','middleware'=>'last_activity'], function () {

    //HOME
    Route::get('/', 'Frontend\HomeController@details');
     Route::resource('/', 'HomeController');
     Route::get('/homePage', 'HomeController@create')->name('homePage');
    Route::get('/home', 'HomeController@index')->name('home');

    //SUBSCRIBE
    Route::get('/plans', 'PlansController@index')->name('frontend.plans.index');
    Route::get('/subscribe/{plan_id}', 'SubscribesController@index')->name('frontend.subscribes.index');
    //Route::get('/subscribe', 'SubscribesController@subscribe')->name('frontend.subscribes.index');
    Route::post('/subscribe/{plan_id}', 'SubscribesController@register')->name('frontend.subscribes.register');

    //FILES
    Route::get('all-files', 'FilesController@allFiles')->name('frontend.files.all');
    Route::get('popular-files', 'FilesController@popular')->name('frontend.files.popular');

    Route::get('file/{file_id}','FilesController@details')->name('frontend.files.details');
    
    Route::get('fileSingle/{file_id}', 'FilesController@single')->name('frontend.files.single');
    Route::get('file/download/{file_id}', 'FilesController@download')->name('frontend.files.download');

    Route::get('/access','FilesController@access')->name('frontend.files.access');

    Route::post('/file/report', 'FilesController@report')->name('frontend.files.report');


    //USERS AUTH 

    Route::get('account/login','UsersController@login')->name('account.login');
    Route::post('account/login', 'UsersController@doLogin')->name('account.post.login');
    Route::get('account/register', 'UsersController@register')->name('account.register');
    Route::post('account/register', 'UsersController@doRegister')->name('account.post.register');
    Route::get('account/logout', 'UsersController@logout')->name('account.logout');

    //RECAPTCHA 
    Route::get('recaptchacreate', 'RecaptchaController@create');
    Route::post('store', 'RecaptchaController@store');

    Route::get('refreshcaptcha', 'UsersController@refreshCaptcha');

    //USERS INFO 
    Route::get('user-info', 'UsersController@showInfo')->name('user.info');
    Route::post('user-info/post', 'UsersController@info')->name('users.post.info');


    //SOCIAL AUTH 
     Route::get('social-login/{provider}','UsersController@redirectToProvider')->name('social-login.redirect');

     Route::get('social-login/{provider}/callback','UsersController@handelProviderCallback')->name('social-login.callback');

     


    //USERS DASHBOARD

    Route::get('/dashboard','DashboardController@index')->name('user.dashboard');
    Route::get('/profile', 'UsersController@profile')->name('user.profile'); 


    //PACKAGES 
    Route::get('/package-details/{package_id}','PackagesController@details')->name('frontend.packages.details');
    Route::get('/package-single/{package_id}', 'PackagesController@singlePackage')->name('frontend.packages.single');
    Route::get('/package/download/{package_id}', 'PackagesController@download')->name('frontend.packages.download');
    Route::post('/package/report', 'PackagesController@report')->name('frontend.packages.report');

    //CATEGORIES 
     Route::get('/categories/{cat_id?}','CategoriesController@index')->name('frontend.categories');
    Route::get('/categories/{category_id?}', 'CategoriesController@item')->name('frontend.categories.item');
    Route::get('/package-categories/{category_id?}', 'CategoriesController@getFilesByCategory')->name('frontend.packageCategories.item');


    //CONTACT US 

   Route::get('/contact-us','ContactController@contact')->name('frontend.contact');
    Route::post('/contact-us/post', 'ContactController@doContact')->name('frontend.post.contact');

//PAYMENTS 


Route::post('payment/{plan_id}','PaymentsController@redirect')->name('payment.start');
Route::post('payment/mellat/verify', 'PaymentsController@verify')->name('payment.verify');


//SEARCH 

Route::get('search','PackagesController@search')->name('search');

 
//SEND EMAIL
Route::get('send-email','MailSend@mailSend')->name('send-email');

    //COMMENTS
Route::get('package-details', 'CommentController@index')->name('comment.index');
Route::post('comments/store/{package_id}', 'CommentController@store')->name('comment.store');

    //Route::get('comments', 'CommentController@reply')->name('comment.reply');
    Route::post('comments/post/{package_id?}', 'CommentController@reply')->name('comment.post.reply');

    //SUPPORT 
    Route::post('support', 'UsersController@support')->name('support');
    Route::post('support/post','UsersController@support')->name('support.post');

    //CART 

    Route::get('/add-to-cart/{id}','CartController@addToCart')->name('cart.add');

    Route::post('/remove-item/{id}','CartController@removeItem')->name('cart.remove');

    Route::get('cart-view/{id}', 'CartController@view')->name('cart.view');


    //ORDERS 

    Route::match(['get','post'],'order-verify', 'OrderController@verify')->name('order.verify');

    
//PAYMENT ZARRIN PAL 

Route::get('payment-verify/{id?}','PaymentController@verify')->name('payment.verify');

//INVOICES

Route::get('invoices','InvoiceController@index')->name('invoices.index');
    Route::get('invoices/{id}', 'InvoiceController@invoice')->name('invoices.lists');

    //NOTIFY 


    //Blog FRONTEND 

    Route::get('blog', 'BlogController@index')->name('blog.index');
    Route::get('single-blog/{slug}', 'BlogController@single')->name('single.blog');

    Route::get('search/{query}','BlogController@searchTitle')->name('posts.search');


    Route::post('post-comment/{id}', 'BlogController@postComment')->name('post.comment');

    //UPLOAD 
    Route::get('/file-upload','UploadController@index')->name('file.upload');

    //DASHBOARD

    Route::get('dash-settings','DashboardController@index')->name('dash-settings');
    Route::post('dash-settings/dropzone', 'DashboardController@dropzone')->name('profile.dropzone');
    Route::post('dash-settings/post', 'DashboardController@upload')->name('profile.upload');
    //USER PROFILE 

    //TICKETS 
    Route::get('tickets/new', 'TicketController@new')->name('ticket.new');

    Route::post('tickets', 'TicketController@create')->name('ticket.create');

    Route::get('tickets/index', 'TicketController@index')->name('ticket.index');

    Route::get('tickets/{ticket}', 'TicketController@show')->name('ticket.show');

    Route::post('tickets/{ticket}/reply', 'ReplyController@create')->name('reply.create');

    Route::get('tickets/{ticket}/close', 'TicketController@close')->name('ticket.close');


    //POINT 
    Route::get('topic/new', 'TopicController@new')->name('topic.new');

    Route::post('topic', 'TopicController@store')->name('topic.store');


    Route::get('topics', 'TopicController@index')->name('topics');

    Route::get('topic/{topic}', 'TopicController@show')->name('topic.show');


    Route::post('topic/{topic}/reply', 'ReplyPointController@store')->name('reply.store');

    Route::get('badge/new', 'BadgeController@new')->name('badge.new');

    Route::post('badge/new', 'BadgeController@store')->name('badge.store');
//search 

Route::post('/search','HomeController@search')->name('search');

//CHAT
Route::get('chat','chatController@index')->name('chat');

//RATING 

Route::post('rating','RatingController@rating')->name('rating');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//GITHUB LOGIN 

Route::get('/sign-in/github', 'Auth\LoginController@github');

Route::get('/sign-in/github/redirect', 'Auth\LoginController@githubRedirect');

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
