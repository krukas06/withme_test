@if(isset($epifs))
 <h2>Новые сообщения</h2>

@foreach($epifs as $epif)


<form action="/del_epif" method="post">

         {{csrf_field()}}
@if($epif->flag == 0)
        <p>{{$epif->text}}</p>
        <input type="hidden" name="id" value="{{$epif->id}}">
        <button type="submit">Удалить сообщение</button>
@endif
</form>

@endforeach

@else 

<p>Сообщений нет</p>

@endif 

