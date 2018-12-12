@if(isset($questions))
 <h2>Вопросы и предложения пользователей</h2>

@foreach($questions as $question)


<form action="/add_question" method="post">

         {{csrf_field()}}
@if($question->flag == 0)
        <p>Новое предложение</p>
@else
        <p>Предложение уже рассмотрено</p>
@endif
        <input type="hidden" name="id" value="{{$question->id}}">
        <input type="hidden" name="email" value="{{$question->email}}">
        <input type="text" name="otvet">
        <button type="submit">Отправить ответ</button>
</form>

@endforeach

@else 

<p>Вопросов нет</p>

@endif 


