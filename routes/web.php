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

  

//DoctorAdmin
Route::get('/AdminHome', 'PagesController@adhome');
Route::get('/admin', 'PostsController@admhome')->middleware('auth_admin');
Route::get('/admin', 'FeedbackController@fedadmin')->middleware('auth_admin');

Route::get('/welcome', 'SweetAlertDemo@index');



use \App\Feedback;
Route::get('/', function(){
    $feedbacks = Feedback::all();
    return view('main.index', compact('feedbacks'));
});

Route::view('/signin', 'main.login');

Route::view('/registerp', 'auth.registerp');



Auth::routes();

Route::get('/usermanager', 'UserTypeController@manage');


//Prescription

Route::get('/home_prescription', 'PrescriptionController@home2');

Route::get('/create_prescription', function(){
    return view('create_prescription');
});

Route::post('/insert_prescription', 'PrescriptionController@add2');

Route::get('/update_prescription/{id}', 'PrescriptionController@edit2');
Route::get('/edit_prescription/{id}', 'PrescriptionController@update2');

Route::get('/read_prescription/{id}', 'PrescriptionController@show');
Route::get('/delete_prescription/{id}', 'PrescriptionController@destroy');


Route::get("/report_prescription",'PrescriptionController@reports');
Route::get("/searchpre",'PrescriptionController@search');


//Treatment

Route::get('/home_treat', function(){
    return view('home_treat');
});
Route::get('/home_treat', 'TreatmentController@index1');
Route::get('/create_treat', function(){
    return view('create_treat');
});

Route::post('/insert_treatment', 'TreatmentController@add1');

Route::get('/update_treat/{id}', 'TreatmentController@update1');
Route::get('/edit_treat/{id}', 'TreatmentController@edit1');

Route::get('/read_treat/{id}', 'TreatmentController@show');
Route::get('/read_treatment/{id}', 'TreatmentController@read');

Route::get('/delete_treat/{id}', 'TreatmentController@destroy');

Route::get("/report_treat",'TreatmentController@reports');
Route::get("/searchtreat",'TreatmentController@search');


// for patients dashboard
Route::resource('patient', 'PatientDashboardController');
Route::resource('search', 'SearchController');

// order
Route::get('/shoppingcart', function () {
    return view('product_order_system.ShoppingCart');
});

Route::get('/search-product', 'ProductSearchController@index');

Route::get('/search-product', 'ProductSearchController@index');
Route::get('/viewproduct/{id}', 'ProductSearchController@show');
Route::get('/productshow','ProductViewController@index');
Route::post('search-product','ProductSearchController@search');
Route::get('/order-admindash','ProductAdminDashController@index')->middleware('auth');
Route::post('order-admindash','ProductAdminDashController@search');
Route::post('/print_order_row','ProductAdminDashController@print_row');
Route::post('admindash_status','ProductAdminDashController@updatesatus');
Route::get('/paitientorderdash','PaitientOrderDashController@indexpaitent')->middleware('auth');
Route::post('/paitientorderdash/general','PaitientOrderDashController@searchgeneral');
Route::post('/paitientorderdash/medical','PaitientOrderDashController@searchmedical');
Route::post('paitientorderdash/edit','PaitientOrderDashController@showedit');
Route::post('paitientorderdash/updateorder','PaitientOrderDashController@updates');
Route::resource('paitintorder','PaitientOrderDashController');
Route::get('/user-prescriptions','PatientPriscriptionOrderController@show')->middleware('auth');
Route::post('/user-prescriptions','PatientPriscriptionOrderController@search');
Route::get('/add-to-cart/{id}',[
    'uses'=>'ProductController@getAddToCart',
    'as'=>'product.addToCart'
]);

Route::get('/reduce-product/{id}',[
    'uses'=>'ProductController@getReduceByone',
    'as'=>'product.reducedbyone'
]);


Route::get('/show-cart',[
    'uses'=>'ProductController@getCart',
    'as'=>'product.show-cart'
])->middleware('auth');
Route::get('/getcheckout',[
    'uses'=>'ProductController@getcheckout',
    'as'=>'product-chek-out'
]);
Route::get('go-to-cart','ShoppingCartController@index');



//Appointmentadmin
Route::resource('appointment', 'AppointmentController');
Route::get('/appointment/create', 'AppointmentController@create');
Route::post('/appointment/check', 'AppointmentController@check')->name('appointment.check');
Route::post('/appointment/update', 'AppointmentController@updateTime')->name('update');



//doctor
Route::get('/doctor', 'DoctorManagementController@index');
  
  
//VaccineAppointment
  Route::get('/appointment', 'FrontendController@index');
  Route::get('/new-appointment/{doctorId}/{date}', 'FrontendController@show')->name('create.appointment');
  Route::post('/book/appointment', 'FrontendController@store')->name('booking.appointment');
  Route::get('/my-booking', 'FrontendController@myBookings')->name('my.booking');

  
  
//patientlist
Route::get('/patients', 'PatientlistController@index')->name('patient');
    Route::get('/patients/all', 'PatientlistController@allTimeAppointment')->name('all.appointments');
    Route::get('/status/update/{id}', 'PatientlistController@toggleStatus')->name('update.status');