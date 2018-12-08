<h1>Личный кабинет</h1>
<br>

@if(isset($roles))
@foreach($roles as $role)
@if(Auth::id() == 31 && $role->user_id == 31)

<a href="/admin/services"><h3><b>Заказы пользователей</b></h3></a>

@else
<a href="{{route('services.show', ['user_id'=>Auth::id()])}}"><h3><b>Заказы</b></h3></a>
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
