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

//forntend routes


        Route::get('/','FrontController@index');
        Route::get('/product','FrontController@product')->name('product');
        Route::get('/about','FrontController@about')->name('about');
        Route::get('/faq','FrontController@faq')->name('faq');
        Route::get('/product/by/solution/{id}','FrontController@productbysolution')->name('product.by.solution');
        Route::get('md5(/solution/pdf/{id})','FrontController@solution_pdf')->name('solution.pdf');
        Route::get('/product/pdf/{id}','FrontController@product_pdf')->name('product.pdf');
        Route::get('/product/details/{id}','FrontController@product_details')->name('product.details');

        Route::post('/contact','FrontController@contact')->name('store.contact');
        
        Route::get('/career','CareearController@index');
        Route::post('/career/store','CareearController@career_store')->name('career.store');
        
        Route::get('/internee','CareearController@internee');
        Route::post('/internee/store','CareearController@internee_store')->name('internee.store');
        
        Route::get('software','FrontController@software')->name('software');




//frontend routs end
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// admin route

Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function (){

		Route::get('dashboard','DashboardController@index')->name('dashboard');

		Route::get('/user','UserController@index')->name('user');
		Route::post('/user/store','UserController@store')->name('user.store');
		Route::get('/edit','UserController@edit')->name('user.edit');
		Route::get('/delete/{id}','UserController@delete')->name('user.delete');

//		slider routers

		Route::get('slider','SliderController@index')->name('slider');
		Route::post('slider/store','SliderController@store')->name('store.slider');
		Route::get('slider/view/{id}','SliderController@view')->name('view.slider');
		Route::get('slider/edit/{id}','SliderController@edit')->name('edit.slider');
		Route::post('slider/update/{id}','SliderController@update')->name('update.slider');
		Route::get('slider/delete/{id}','SliderController@delete')->name('delete.slider');
		Route::get('slider/unpublished/{id}','SliderController@unpublished')->name('unpublished.slider');
		Route::get('slider/published/{id}','SliderController@published')->name('published.slider');


//		solution routers

        Route::get('solution','SolutionController@index')->name('solution');
        Route::post('solution/store','SolutionController@store')->name('store.solution');
        Route::get('solution/view/{id}','SolutionController@view')->name('view.solution');
        Route::get('solution/edit/{id}','SolutionController@edit')->name('edit.solution');
        Route::post('solution/update/{id}','SolutionController@update')->name('update.solution');
        Route::get('solution/delete/{id}','SolutionController@delete')->name('delete.solution');
        Route::get('solution/unpublished/{id}','SolutionController@unpublished')->name('unpublished.solution');
        Route::get('solution/published/{id}','SolutionController@published')->name('published.solution');


//        product routers

        Route::get('product','ProductController@index')->name('product');
        Route::post('product/store','ProductController@store')->name('store.product');
        Route::get('product/view/{id}','ProductController@view')->name('view.product');
        Route::get('product/edit/{id}','ProductController@edit')->name('edit.product');
        Route::post('product/update/{id}','ProductController@update')->name('update.product');
        Route::get('product/delete/{id}','ProductController@delete')->name('delete.product');
        Route::get('product/unpublished/{id}','ProductController@unpublished')->name('unpublished.product');
        Route::get('product/v/{id}','ProductController@published')->name('published.product');



    //        Client routers

        Route::get('client','ClientController@index')->name('client');
        Route::post('client/store','ClientController@store')->name('store.client');
        Route::get('client/view/{id}','ClientController@view')->name('view.client');
        Route::get('client/edit/{id}','ClientController@edit')->name('edit.client');
        Route::post('client/update/{id}','ClientController@update')->name('update.client');
        Route::get('client/delete/{id}','ClientController@delete')->name('delete.client');
        Route::get('client/unpublished/{id}','ClientController@unpublished')->name('unpublished.client');
        Route::get('client/published/{id}','ClientController@published')->name('published.client');


//        contact route

        Route::get('contact','ContactController@index')->name('contact');
        Route::get('contact/view/{id}','ContactController@view')->name('view.contact');
        Route::get('contact/edit/{id}','ContactController@index')->name('edit.contact');
        Route::get('contact/delete/{id}','ContactController@delete')->name('delete.contact');
        
        
         // software controller

        Route::get('software','SoftwareController@index')->name('software.index');
        Route::post('software','SoftwareController@store')->name('software.store');



	});



// editor route

Route::group(['as'=>'editor.','prefix'=>'editor','namespace'=>'Editor','middleware'=>['auth','editor']], function (){

		Route::get('dashboard','DashboardController@index')->name('dashboard');



    Route::get('product','ProductController@index')->name('product');
    Route::post('product/store','ProductController@store')->name('store.product');
    Route::get('product/view/{id}','ProductController@view')->name('view.product');
    Route::get('product/edit/{id}','ProductController@edit')->name('edit.product');
    Route::post('product/update/{id}','ProductController@update')->name('update.product');
    Route::get('product/unpublished/{id}','ProductController@unpublished')->name('unpublished.product');
    Route::get('product/v/{id}','ProductController@published')->name('published.product');





    Route::get('solution','SolutionController@index')->name('solution');
    Route::post('solution/store','SolutionController@store')->name('store.solution');
    Route::get('solution/view/{id}','SolutionController@view')->name('view.solution');
    Route::get('solution/edit/{id}','SolutionController@edit')->name('edit.solution');
    Route::post('solution/update/{id}','SolutionController@update')->name('update.solution');
    Route::get('solution/unpublished/{id}','SolutionController@unpublished')->name('unpublished.solution');
    Route::get('solution/published/{id}','SolutionController@published')->name('published.solution');



    Route::get('client','ClientController@index')->name('client');
    Route::post('client/store','ClientController@store')->name('store.client');
    Route::get('client/view/{id}','ClientController@view')->name('view.client');
    Route::get('client/edit/{id}','ClientController@edit')->name('edit.client');
    Route::post('client/update/{id}','ClientController@update')->name('update.client');
    Route::get('client/unpublished/{id}','ClientController@unpublished')->name('unpublished.client');
    Route::get('client/published/{id}','ClientController@published')->name('published.client');


    Route::get('slider','SliderController@index')->name('slider');
    Route::post('slider/store','SliderController@store')->name('store.slider');
    Route::get('slider/view/{id}','SliderController@view')->name('view.slider');
    Route::get('slider/edit/{id}','SliderController@edit')->name('edit.slider');
    Route::post('slider/update/{id}','SliderController@update')->name('update.slider');
    Route::get('slider/unpublished/{id}','SliderController@unpublished')->name('unpublished.slider');
    Route::get('slider/published/{id}','SliderController@published')->name('published.slider');



	});
