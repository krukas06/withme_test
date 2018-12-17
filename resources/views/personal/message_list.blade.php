<h2>Ваши сообщения</h2>
<br>
<br>
@if(isset($epifs))
 
    @foreach($epifs as $epif)
       
	@if(Auth::id() == $epif->page_user_id)
	 <p>{{$epif->text}}</p>
		
	<a href="{{route('page.show', ['id'=>$epif->pages_id])}}">Открыть страницу</a><br>
        @if($epif->seen == 0)
                <h3>Новое сообщение</h3>
        @else
                <h3>Сообщение просмотрено</h3>

        @endif
	@endif

        <br>
    @endforeach
   
@endif

@if(!isset($epifs))
        <h2>У вас нет сообщений</h2>

@endif
