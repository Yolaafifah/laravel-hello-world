  
<?php




// Route::get('/hello', 'WelcomeController@hello');

Route::get('/', 'HomeController@index'); 

Route::get('/about', 'AboutController@index');

Route::get('/article/{id}', 'ArticleController@index');
Route::get('/manage', 'ArticleController@manage')->name('manage');
Route::get('/manageuser', 'UserController@manageuser')->name('manageuser');
Route::get('/manage/add','ArticleController@add');
Route::post('/manage/create','ArticleController@create');
Route::get('/manage/edit/{id}','ArticleController@edit');
Route::post('/manage/update/{id}','ArticleController@update');
Route::get('/manage/delete/{id}','ArticleController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user/{id}', 'UserController@index');
Route::get('/manageuser', 'UserController@manageuser')->name('manageuser');
Route::get('/manageuser/add','UserController@add');
Route::post('/manageuser/create','UserController@create');
Route::get('/manageuser/edit/{id}','UserController@edit');
Route::post('/manageuser/update/{id}','UserController@update');
Route::get('/manageuser/delete/{id}','UserController@delete');

