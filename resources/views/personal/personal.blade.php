<!doctype html>
<html lang="ru">
  <head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link href="http://allfont.ru/allfont.css?fonts=open-sans-bold" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="{{asset('css/style4.css') }}">
    <title>Личный кабинет</title>
      </head>
     <body>
    <div id="wrapper">
    	<div class="logo">
      <nav class="navbar navbar-expand-lg navbar-light">
       <a class="navbar-brand" href="/"><img src="{{asset('images/logo.svg') }}" class="logotip" alt="Pomnu"></a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
       <ul class="navbar-nav ml-auto classka">
        <li class="nav-item poiska" data-toggle="modal" data-target="#exampleModal3">
          <a href="#" class="nav-link" id="search" data-toggle="modal" data-target="#exampleModal" ><img src="{{asset('images/poisk.png') }}" alt="поиск">поиск</a>
        </li>
         <li class="nav-item vihod " data-toggle="modal">
          <a href="/logout" class="nav-link" id="logout" ><img src="{{asset('images/vhod.png') }}" alt="выход"> Выйти</a>
        </li>
     	</ul>
    		</div>
     </nav>


<div class="container-fluid videopocas justify-content-center justify-content-sm-center">
    	<div class="row">
  <div class="col-md-3 A">
  	<ul class="list-counter-square list-justify menu">
@if(isset($roles))
@foreach($roles as $role)
@if(Auth::id() == 31 && $role->user_id == 31)
   <li><a href="/admin/services">Заказы рользователей</a></li>
  <li><a href="/admin/question">Вопросы и предложения пользователей<span class="numb"></a></li>
  <li><a href="/admin/pages">Новые страницы</a></li>
  <li><a href="/admin/epifs">Новые сообщений</a></li>	
@else
  <li class="check"><u>Памятные страницы</u></li>
  <li><a href="/events">Календарь событий</a></li>
  <li><a href="/list/message">Уведомления<span class="numb">{{(isset($kol)) ? $kol : '0'}}</span><img src="{{asset('images/notifications.png') }}" alt=""></a></li>
  <li><a href="{{route('services.show', ['user_id'=>Auth::id()])}}">Заказы</a></li>
  <li><a href="/setings">Настройки</a></li>
</ul>
<a href="/add_page"><button type="submit" class="btn btn-primary btn1"><img src="{{asset('images/no.png') }}"  class="add" alt=""> ДОБАВИТЬ СТРАНИЦУ</button></a>

  </div>
  <div class="col-md-9 B">
		<ul class="list-counter-square list-justify str">
  
  <li ><a href="/personal" class="notcheck">Личные</a></li>
  <li ><a href="/pages_list" class="notcheck check">Все</a></li>
</ul>
<div class="row justify-content-start guys">
@if (Request::is('personal'))
@if(isset($pages))
@foreach($pages as $page)
@foreach($page->img as $key=>$value)
@if($key == 0)
@if(Auth::id() == $page->user_id)
  <div class="col-lg-3 ">
  	<a href="{{route('page.show', ['id'=>$page->id])}}"><img src="{{asset('images')}}/{{$value}}" alt="Фото"></a>
	<p class="dannie">{{$page->surname}}<br>{{$page->name}} {{$page->Otchestvo}}</p>
	<p class="dannie data"><strong>{{date('d.m.Y', strtotime($page->data_birth))}} - {{date('d.m.Y', strtotime($page->data_dead))}}</strong></p>
  </div>


@endif
@endif


@endforeach
@endforeach
@endif
@endif
@endif






@endforeach
@endif






@if (Request::is('searchpersonal'))
@if(isset($data))
@foreach($data as $dat)
@if($dat->access == 0 || $dat->user_id == Auth::id())
@foreach($dat->img as $key=>$value)
@if($key == 0)
  <div class="col-lg-3 ">
        <a href="{{route('page.show', ['id'=>$dat->id])}}"><img src="{{asset('images')}}/{{$value}}" alt="Фото"></a>
        <p class="dannie">{{$dat->surname}}<br>{{$dat->name}} {{$dat->Otchestvo}}</p>
        <p class="dannie data"><strong>{{date('d.m.Y', strtotime($dat->data_birth))}} - {{date('d.m.Y', strtotime($dat->data_dead))}}</strong></p>
  </div>


@endif


@endforeach
@endif
@endforeach
@endif

@endif








@if (Request::is('pages_list'))
@foreach($pages as $page)
@if($page->access == 0 || $page->user_id == Auth::id())
@foreach($page->img as $key=>$value)
@if($key == 0)
  <div class="col-lg-3 ">
        <a href="{{route('page.show', ['id'=>$page->id])}}"><img src="{{asset('images')}}/{{$value}}" alt="Фото"></a>
        <p class="dannie">{{$page->surname}}<br>{{$page->name}} {{$page->Otchestvo}}</p>
        <p class="dannie data"><strong>{{$page->data_birth}} - {{$page->data_dead}}</strong></p>
  </div>


@endif


@endforeach
@endif
@endforeach


@endif


</div>

  </div>
</div>
    </div>





































    </div>
















</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title " id="exampleModalLabel">ПОИСК</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
              <span aria-hidden="true" class="crest">&times;</span>
            </button>
          </div>

		
          <div class="modal-body">
          <form id="contactForm" action="/searchpersonal" method="post">
            {{csrf_field()}}


	    <div class="form-group">
              <input id="familiya" class="form-control tri" name="surname"  type="text" placeholder="Фамилия">
            </div>
            <div class="form-group">
              <input id="name" class="form-control tri" name="name"  type="text" placeholder="Имя">
            </div>
            <div class="form-group">
              <input id="otchestvo" class="form-control tri " name="Otchestvo"  type="text" placeholder="Отчество">
            </div>
            <div class="form-group">
              <input id="mestozah" class="form-control tri" name="burials_id"  type="text" placeholder="Место захоронения">
            </div>
            <div class="form-group">
              <label for="data1">Дата рождения:</label>
              <input id="data1" class="form-control tri" name="data_birth"  type="date" >
            </div>
            <div class="form-group">
              <label for="data2">Дата смерти:</label>
              <input id="data2" class="form-control tri" name="data_dead"  type="date" >
            </div>
            <button class="btn btn-sumbit btn3" ><img src="{{asset('images/no.png') }}" alt="add3" class="add3">  Найти</button>
            </form>
            
          
        </div>
         
        </div>
      </div>
      
    </div> 

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>
