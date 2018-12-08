@if(isset($services))
 <h2>Заказы пользователи</h2>

@foreach($services as $service)


<form action="/add_price" method="post">

         {{csrf_field()}}
@if($service->admin_flag == 0)
	<p>Новый заказ</p>
@else
	<p>Заказ уже рассмотрен</p>
@endif
	<input type="hidden" name="id" value="{{$service->id}}">
        <input type="hidden" name="email" value="{{$service->email}}">
        <input type="hidden" name="pages_id" value="{{$service->id}}">
        <p>{{$service->usluga}}</p>
	<input type="text" name="price">
	<button type="submit">Отправить цену</button>
</form>

@endforeach

@else 

<p>Заказов нет</p>

@endif 
