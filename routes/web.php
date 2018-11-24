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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


//Route::get('/home', 'HomeController@index')->name('home');


//Route::resource('home', 'TestController')->only(['index']);


//путь для отображения всех существующих страниц
Route::resource('pages', 'PageController')->only(['index']);

//путь для сохранения страницы в БД
Route::resource('add', 'PageController')->only(['store'])->middleware('auth');

/*//путь для сохранения фотографий для страницы
Route::resource('add_photo', 'PhotoController')->only(['store'])->middleware('auth');*/

//путь для отображения формы для добавления страницы
Route::get('add_page', 'PageController@create')->middleware('auth');

//путь для просмотра выбраной страницы
Route::resource('page', 'PageController',['parametres'=>[

    'page'=>'id'

]
]);

//путь для отображения формы для редактирования страницы
Route::match(['get','post'], '/edit/{id}', ['uses'=>'PageController@edit', 'as'=>'pagesEdit'])->middleware('auth');
//путь для отображения формы редактирования страницы
Route::resource('page', 'PageController',['parametres'=>[

    'page'=>'id'

]
]);

//путь для сохранениявыбранной страницы
/*Route::resource('page', 'PageController')->only(['update'])->middleware('auth');*/


Route::resource('page', 'PageController',['parametres'=>[

    'page'=>'id'

]
]);

//путь для редактирования страницы
/*Route::resource('page', 'PageController',['parametres'=>[

    'page'=>'id'

]
]);*/

//путь для добавления епитафия к определенной страницы
Route::resource('epif_add', 'EpifController')->only(['store'])->middleware('auth');

//путь для теста реалтайма
Route::get('/', function (){
    return view('welcome');
});

//путь для теста реалтайма
Route::post('messages',function (\Illuminate\Http\Request $request){



    \App\Events\Message::dispatch($request->input('body'));



});

/*Route::get('add_photo', 'PhotoController@create')->middleware('auth');

Route::resource('photo', 'PhotoController@store')->middleware('auth');*/


/*Route::get('/login/{provider?}',[
    'uses' => 'AuthController@getSocialAuth',
    'as'   => 'auth.getSocialAuth'
]);


Route::get('/login/callback/{provider?}',[
    'uses' => 'AuthController@getSocialAuthCallback',
    'as'   => 'auth.getSocialAuthCallback'
]);*/