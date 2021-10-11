<?php
 
 Route::prefix('/admin')->group(function(){
 	Route::get('/', 'Admin\DashboardController@getDashboard')->name('dashboard');

 	


 	//Modulo de usuarios
 	Route::get('/users/{status}', 'Admin\UserController@getUsers')->name('user_list');
 	Route::get('/user/{id}/edit', 'Admin\UserController@getUserEdit')->name('user_edit');
 	Route::post('/user/{id}/edit', 'Admin\UserController@postUserEdit')->name('user_edit');
 	Route::get('/user/{id}/banned', 'Admin\UserController@getUserBanned')->name('user_banned');
 	Route::get('/user/{id}/permissions', 'Admin\UserController@getUserPermissions')->name('user_permissions');
 	Route::post('/user/{id}/permissions', 'Admin\UserController@postUserPermissions')->name('user_permissions');
 	

 	//MODULE ATTRACTIVE
 	Route::get('/attractives/{status}', 'Admin\AttractiveController@getHome')->name('attractives');
 	Route::get('/attractive/add', 'Admin\AttractiveController@getAttractiveAdd')->name('attractive_add');
    Route::get('/attractive/{id}/edit', 'Admin\AttractiveController@getAttractiveEdit')->name('attractive_edit');
    Route::get('/attractive/{id}/delete', 'Admin\AttractiveController@getAttractiveDelete')->name('attractive_delete');
 	Route::get('/attractive/{id}/restore', 'Admin\AttractiveController@getAttractiveRestore')->name('attractive_delete');

 	Route::post('/attractive/add', 'Admin\AttractiveController@postAttractiveAdd')->name('attractive_add');
 	Route::post('/attractive/search', 'Admin\AttractiveController@postAttractiveSearch')->name('attractive_search');
 	Route::post('/attractive/{id}/edit', 'Admin\AttractiveController@postAttractiveEdit')->name('attractive_edit');

 	Route::post('/attractive/{id}/gallery/add', 
 		'Admin\AttractiveController@postAttractiveGalleryAdd')->name('attractive_gallery_add');
 	Route::get('/attractive/{id}/gallery/{gid}/delete', 
 		'Admin\AttractiveController@getAttractiveGalleryDelete')->name('attractive_gallery_delete');
 	
    //categorias
 	Route::get('/categories/{module}', 'Admin\CategoriesController@getHome')->name('categories');
 	Route::post('/category/add/{module}', 'Admin\CategoriesController@postCategoryAdd')->name('category_add');
 	Route::get('/category/{id}/edit', 'Admin\CategoriesController@getCategoryEdit')->name('category_edit');
 	Route::post('/category/{id}/edit', 'Admin\CategoriesController@postCategoryEdit')->name('category_edit');
 	Route::get('/category/{id}/delete', 'Admin\CategoriesController@getCategoryDelete')->name('category_delete');

 	
 });

 

