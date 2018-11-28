<form action="/search" method="post">

    {{csrf_field()}}
    <input type="text" name="surname">
    <input type="text" name="name">
    <input type="text" name="Otchestvo">
    <input type="text" name="burials">
    <input type="date" name="data_birth">
    <input type="date" name="data_dead">

    <button type="submit" class="btn btn-primary btn4" value="Add">НАЙТИ</button>
</form>

<br>
<br>
<br>

<h2>Результат поиска</h2>
<br>
<br>
@if(isset($data))
    @foreach($data as $dat)
        {{$dat->name}}
    @endforeach
@endif
