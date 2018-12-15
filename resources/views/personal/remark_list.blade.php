<h2>Ваши замечания</h2>
<br>
<br>
@if(isset($remarks))
    @foreach($remarks as $remark)
        <p>{{$remark->text}}</p>

	<a href="{{route('page.show', ['id'=>$remark->page_id])}}">Открыть страницу</a><br>
    @endforeach
   
@endif

@if(!isset($remarks))
        <h2>У вас нет замечаний</h2>

@endif

