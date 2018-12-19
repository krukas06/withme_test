<h2>Ваши ответы</h2>
<br>
<br>
@if(isset($questions))
    @foreach($questions as $question)
    @if(Auth::id() == $question->user_id)
        @if($question->answer)
	<p>{{$question->answer}}</p>
	@else
	<p>У вас нет ответов</p>
	@endif
    @endif    
    @endforeach
   
@endif

