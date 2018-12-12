<h1>Личный кабинет</h1>
<br>

@if(isset($roles))
@foreach($roles as $role)
@if(Auth::id() == 31 && $role->user_id == 31)

<a href="/admin/services"><h3><b>Заказы пользователей</b></h3></a>
<a href="/admin/question"><h3><b>Вопросы и предложения пользователей</b></h3></a>

@else
<a href="{{route('services.show', ['user_id'=>Auth::id()])}}"><h3><b>Заказы</b></h3></a>
<a href="{{route('event.show', ['user_id'=>Auth::id()])}}"><h3><b>Мои личные события</b></h3></a>
<a href="/events"><h3>Добавление события</h3></a>
<br>
<h3>Мои страницы</h3>
<br>
@foreach($pages as $page)
     @foreach($page->img as $key=>$value)
         @if($key == 0)
		@if(Auth::id() == $page->user_id)
                <div>
                    <a href="{{route('page.show', ['id'=>$page->id])}}"><img style="width: 100px; height: 80px;" src="{{asset('images')}}/{{$value}}" alt=""></a>
                </div>
		@endif
         @endif

      @endforeach
  @endforeach
@endif

@endforeach
@endif



@if(isset($roles))
@foreach($roles as $role)
@if(Auth::id() == 31 && $role->user_id == 31)

<h3> ADMIN</h3>

@endif
@endforeach
@endif
<br>
<a href="/logout"><h1><b>ВЫЙТИ ИЗ УЧЕТНОЙ ЗАПИСИ</b></h1></a>
