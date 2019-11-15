<?php

//frontpages

    //aboutuspage..........................................
    Route::get('/about', 'AboutUsController@index')->name('about');

    //contactuspage.............................................
    Route::get('/contact', 'ContactUsController@index')->name('contact');
    Route::post('/contact/create', 'ContactUsController@create')->name('contact_create');

    //productpage....................................................
    Route::get('/product', 'Product\ProductController@index')->name('product');
    Route::post('/product/create', 'ProductController@create')->name('product_create');

    //orderpage.......................................................
    Route::get('/order', 'Order\OrderController@index')->name('order');
    Route::post('/order/create', 'OrderController@create')->name('order_create');

    //areapage.........................................................
    Route::get('/area', 'Area\AreaController@index')->name('area');
    Route::post('/area/create', 'AreaController@create')->name('area_create');

    //distributor page.................................................
    Route::get('/distributor', 'Distributor\DistributorController@index')->name('distributor');
    Route::post('/distributor/create', 'DistributorController@create')->name('distributor_create');

    //supplier page........................................................
    Route::get('/supplier', 'Supplier\SupplierController@index')->name('supplier');
    Route::post('/supplier/create', 'SupplierController@create')->name('supplier_create');

    //merchandiser page......................................................
    Route::get('/merchandiser', 'Merchandiser\MerchandiserController@index')->name('merchandiser');
    Route::post('/merchandiser/create', 'MerchandiserController@create')->name('merchandiser_create');

    //requisition page...........................................................
    Route::get('/requisition', 'RequisitionController@index')->name('requisition');
    Route::post('/requisition/create', 'RequisitionController@create')->name('requisition_create');

    //taskpage ..............................................................
    Route::get('/task', 'Task\TaskController@index')->name('task');
    Route::post('/task/create', 'TaskController@create')->name('task_create');



    //dashboard layout





//backend...............................
//show dashboard............................
Route::get('/panel', 'Dashboard\DashboardController@showDashboard')->name('panel');

//contact...................................
Route::get('/admin/contact', 'Dashboard\DashboardContactController@index')->name('dashcontact');

//product...........................................

Route::get('/admin/product', 'Product\ProductController@showProduct')->name('dashproduct');
Route::get('/create/product', 'Product\ProductController@createProduct')->name('createProduct');
Route::post('/store/product', 'Product\ProductController@create')->name('storeProduct');


//order.................................................
Route::get('/admin/order', 'Order\OrderController@showOrder')->name('dashorder');
Route::get('/create/order', 'Order\OrderController@createOrder')->name('createOrder');
Route::post('/store/order', 'Order\OrderController@create')->name('storeOrder');

//task.................................................................
Route::get('/admin/task', 'Task\TaskController@showTask')->name('dashtask');
Route::get('/create/task', 'Task\TaskController@createTask')->name('createTask');
Route::post('/store/task', 'Task\TaskController@create')->name('storeTask');

//area...................................
Route::get('/admin/area', 'Area\AreaController@showArea')->name('dasharea');
Route::get('/create/area', 'Area\AreaController@createArea')->name('createArea');
Route::post('/store/area', 'Area\AreaController@create')->name('storeArea');

//distributor.......................................
Route::get('/admin/distributor', 'Distributor\DistributorController@showDistributor')->name('distributor');
Route::get('/create/distributor', 'Distributor\DistributorController@createDistributor')->name('createDistributor');
Route::post('/store/distributor', 'Distributor\DistributorController@create')->name('storeDistributor');

//supplier...............................................
Route::get('/admin/supplier', 'Supplier\SupplierController@showSupplier')->name('supplier');
Route::get('/create/supplier', 'Supplier\SupplierController@createSupplier')->name('createSupplier');
Route::post('/store/supplier', 'Supplier\SupplierController@create')->name('storeSupplier');

//merchandiser ...............................................................
Route::get('/admin/merchandiser', 'Merchandiser\MerchandiserController@showMerchandiser')->name('merchandiser');
Route::get('/create/merchandiser', 'Merchandiser\MerchandiserController@createMerchandiser')->name('createMerchandiser');
Route::post('/store/merchandiser', 'Merchandiser\MerchandiserController@create')->name('storeMerchandiser');

//requisition .....................................................................
Route::get('/admin/requisition', 'RequisitionController@showRequisition')->name('requisition');
Route::get('/create/requisition', 'RequisitionController@createRequisition')->name('createRequisition');
Route::post('/store/requisition', 'RequisitionController@create')->name('storeRequisition');

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
