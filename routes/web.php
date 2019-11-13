<?php

//frontpages

    //aboutuspage..........................................
    Route::get('/about', 'AboutUsController@index')->name('about');

    //contactuspage.............................................
    Route::get('/contact', 'ContactUsController@index')->name('contact');
    Route::post('/contact/create', 'ContactUsController@create')->name('contact_create');

    //productpage....................................................
    Route::get('/product', 'ProductController@index')->name('product');
    Route::post('/product/create', 'ProductController@create')->name('product_create');

    //orderpage.......................................................
    Route::get('/order', 'OrderController@index')->name('order');
    Route::post('/order/create', 'OrderController@create')->name('order_create');

    //areapage.........................................................
    Route::get('/area', 'AreaController@index')->name('area');
    Route::post('/area/create', 'AreaController@create')->name('area_create');

    //distributor page.................................................
    Route::get('/distributor', 'DistributorController@index')->name('distributor');
    Route::post('/distributor/create', 'DistributorController@create')->name('distributor_create');

    //supplier page........................................................
    Route::get('/supplier', 'SupplierController@index')->name('supplier');
    Route::post('/supplier/create', 'SupplierController@create')->name('supplier_create');

    //merchandiser page......................................................
    Route::get('/merchandiser', 'MerchandiserController@index')->name('merchandiser');
    Route::post('/merchandiser/create', 'MerchandiserController@create')->name('merchandiser_create');

    //requisition page...........................................................
    Route::get('/requisition', 'RequisitionController@index')->name('requisition');
    Route::post('/requisition/create', 'RequisitionController@create')->name('requisition_create');

    //taskpage create..............................................................
    Route::get('/taskcreate', 'TaskController@TaskCreate')->name('taskcreate');
    Route::post('/taskcreate/create', 'TaskController@create')->name('task_create');

    //taskpage view...............................................................
    Route::get('/taskview/index', 'TaskController@TaskView')->name('task_view');


    //dashboard layout





//backend...............................
//show dashboard............................
Route::get('/panel', 'DashboardController@showDashboard')->name('panel');

//contact...................................
Route::get('/admin/contact', 'DashboardContactController@index')->name('dashcontact');

//product...........................................

Route::get('/admin/product', 'ProductController@showProduct')->name('dashproduct');
Route::get('/create/product', 'ProductController@createProduct')->name('createProduct');
Route::post('/store/product', 'ProductController@store')->name('storeProduct');


//order.................................................
Route::get('/admin/order', 'OrderController@showOrder')->name('dashorder');
Route::get('/create/order', 'OrderController@createOrder')->name('createOrder');
Route::post('/store/order', 'OrderController@store')->name('storeOrder');


//area...................................
Route::get('/admin/area', 'AreaController@showArea')->name('dasharea');
Route::get('/create/area', 'AreaController@createArea')->name('createArea');
Route::post('/store/area', 'AreaController@store')->name('storeArea');

//distributor.......................................
Route::get('/admin/distributor', 'DistributorController@showDistributor')->name('distributor');
Route::get('/create/distributor', 'DistributorController@createDistributor')->name('createDistributor');
Route::post('/store/distributor', 'DistributorController@store')->name('storeDistributor');

//supplier...............................................
Route::get('/admin/supplier', 'SupplierController@showSupplier')->name('supplier');
Route::get('/create/supplier', 'SupplierController@createSupplier')->name('createSupplier');
Route::get('/store/supplier', 'SupplierController@store')->name('storeSupplier');

//merchandiser ...............................................................
Route::get('/admin/merchandiser', 'MerchandiserController@showMerchandiser')->name('merchandiser');
Route::get('/create/merchandiser', 'MerchandiserController@createMerchandiser')->name('createMerchandiser');
Route::post('/store/merchandiser', 'MerchandiserController@store')->name('storeMerchandiser');

//requisition .....................................................................
Route::get('/admin/requisition', 'RequisitionController@showRequisition')->name('requisition');
Route::get('/create/requisition', 'RequisitionController@createRequisition')->name('createRequisition');
Route::post('/store/requisition', 'RequisitionController@store')->name('storeRequisition');

//backend...............................



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->middleware('verified');






//Roles
Route::get('/user/roles/index', 'RoleController@index')->name('role_index');
Route::get('/user/roles/create', 'RoleController@RoleCreate')->name('role_create_page');
Route::post('/user/roles/create', 'RoleController@create')->name('role_create');
Route::get('/user/roles/{id}/update', 'RoleController@RoleUpdate')->name('role_update_page');
Route::PATCH('/user/roles/update/{id}', 'RoleController@update')->name('role_update');
Route::DELETE('/user/roles/delete/{id}', 'RoleController@delete')->name('role_delete');
//roles end
//Users
Route::get('/user/index', 'UserController@index')->name('user_index');
Route::get('/user/assignrole/{user}/update', 'UserController@UserUpdate')->name('user_update_page');
Route::PATCH('/user/assignrole/update/{user}','UserController@update')->name('user_update');
Route::DELETE('/user/delete/{user}', 'UserController@delete')->name('user_delete');
//users end
