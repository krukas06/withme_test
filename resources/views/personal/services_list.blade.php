
<h2>Ваши заказы</h2>
<br>
<br>
@if(isset($services))
    @foreach($services as $service)
	<p>{{$service->name}}</p>

	@if(isset($service->price))
		<p>Стоимость услуги {{$service->price}}</p>
	@endif	

        @if($service->flag == 0)
		<h3>Ваш заказ еще не рассмотрен администратором</h3>
	@else
		<h3>Ваш заказ рассмотрен администратором</h3>

	@endif

	
	<br>
    @endforeach
   
@endif

@if(!isset($services))
	<h2>У вас нет заказов</h2>

@endif
