
<h2>Ваши Личные события</h2>
<br>
<br>
@if(isset($events))
    @foreach($events as $event)
        <p>{{$event->name}}</p>

        
        <br>
    @endforeach
   
@endif

@if(!isset($events))
        <h2>У вас нет событий</h2>

@endif

