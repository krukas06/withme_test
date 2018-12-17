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

//Auth::routes();


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
Route::get('ad', function (){
    return view('test');
});



//путь для отображения формы для редактирования страницы
Route::match(['get','post'], '/edit/{id}', ['uses'=>'PageController@edit', 'as'=>'pagesEdit'])->middleware('auth');


/*//путь для отображения формы редактирования страницы
Route::resource('page', 'PageController',['parametres'=>[

    'page'=>'id'

]
]);*/

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

//путь для добавления события к определенной страницы
//Route::resource('event_add', 'EventsController')->only(['store'])->middleware('auth');

//путь для теста реалтайма
/*Route::get('/', function (){
    return view('welcome');
});*/

//путь для теста реалтайма
Route::post('messages',function (\Illuminate\Http\Request $request){



    \App\Events\Message::dispatch($request->input('body'));



});

// отображение главной страницы
Route::resource('/', 'MainController')->only(['index']);


//путь для поиска
Route::post('search', 'SearchController@search');

//путь для заказа услуги
Route::resource('service', 'ServiceController')->only(['store'])->middleware('auth');

//путь для отправки предложения на почту
Route::post('message', 'MessageController@message');





//маршруты для потверждения регистрации на почту

Route::get('register', 'RegistrationController@register');
Route::post('register', 'RegistrationController@postRegister');

Route::get('register/confirm/{token}', 'RegistrationController@confirmEmail');

Route::get('login', 'SessionsController@login')->middleware('guest');
Route::post('login', 'SessionsController@postLogin')->middleware('guest');
Route::get('logout', 'SessionsController@logout');

Route::get('dashboard', ['middleware' => 'auth', function() {
    return view('main');
   // return 'Добро пожаловать, '.Auth::user()->name.'!';
}]);



//вход через соцсети
Route::post('ulogin', 'UloginController@login');


//маршрут для входа в личный кабинет
Route::resource('personal', 'PersonalController')->only(['index'])->middleware('auth');


//путь для просмотра личных заказов через кабинет
Route::resource('services', 'ServiceController',['parametres'=>[

    'services'=>'user_id'

]
]);

//путь для просмотра личных замечаний через лк
Route::resource('remark', 'RemarkController',['parametres'=>[

    'remark'=>'user_id'

]
]);




//путь для просмотра заказов пользователей админ панели
Route::get('admin/services', 'Admin\AdminController@listServices')->middleware('auth');

//путь для просмотра вопросо пользоателей
Route::get('admin/question', 'Admin\AdminController@listQuestion')->middleware('auth');

//путь для отправки цены пользователю в виде почты и в виде изменения цены
Route::post('add_price', 'Admin\AdminController@addPrice')->middleware('auth');

//путь для отправки ответа пользователю на почту (вопрос предложение)
Route::post('add_question', 'Admin\AdminController@addQuestion')->middleware('auth');

//путь дляпросмотра новых страниц (неподтвержденных)
Route::get('admin/pages', 'Admin\AdminController@pages_list')->middleware('auth');

//путь для подтверждения страницы
Route::post('admin/confirmation', 'Admin\AdminController@confirmationPage')->middleware('auth');

//путь для отправки замечания
Route::post('admin/remarks', 'Admin\AdminController@addRemark')->middleware('auth');

//путь для просмотра сообщений пользователей
Route::get('admin/epifs', 'Admin\AdminController@listEpifs')->middleware('auth');

//путь для подтверждения сообщения
Route::post('del_epif', 'Admin\AdminController@confirmationEpif')->middleware('auth');



//путь для появлния форм для добавлениея событий
Route::resource('events', 'EventsController')->only(['index']);

//путь для добавления личного события
Route::resource('myevent_add', 'EventsController')->only(['store'])->middleware('auth');

//путь для добавления события усопшего
Route::post('event_add', 'DeadController@add_event')->middleware('auth');

//путь для просмотра личных заказов через кабинет
Route::resource('event', 'EventsController',['parametres'=>[

    'event'=>'user_id'

]
]);


//путь для редактирования эпитафия
Route::post('epif/edit', 'EpifController@editEpif')->middleware('auth');

//путь для удаления эпитафия
Route::post('epif/del', 'EpifController@deleteEpif')->middleware('auth');

//путь для просмотра сообщений с лк (эпитафий)
Route::get('list/message', 'PersonalController@listMessage')->middleware('auth');


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
