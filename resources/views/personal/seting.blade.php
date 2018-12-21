<h1>Личные настройки</h2>
<br>
<form id="contactForm" action="/seting_update" method="post">

{{csrf_field()}}
  <input type="hidden" name="id" value="{{Auth::id()}}">
   <div class="form-group">
       <label for="data1">Фамилия</label>
       <input id="data1" class="form-control tri" name="surname" value="{{isset($users->surname) ? $users->surname : ''}}"  type="text" >
  </div>
<br>
  <div class="form-group">
        <label for="data2">Имя</label>
        <input id="data2" class="form-control tri" name="name_l" value="{{isset($users->name_l) ? $users->name_l : ''}}"  type="text" >
   </div>
<br>
  <div class="form-group">
        <label for="data3">Отчество</label>
        <input id="data3" class="form-control tri" name="Otchestvo" value="{{isset($users->Otchestvo) ? $users->Otchestvo : ''}}"  type="text" >
   </div>
<br>
  <div class="form-group">
        <label for="data4">Логин</label>
        <input id="data4" class="form-control tri" name="name"  value="{{isset($users->name) ? $users->name : ''}}"  type="text" >
   </div>
<br>
  <div class="form-group">
        <label for="data5">Пароль</label>
        <input id="data5" class="form-control tri" name="password" value="{{$users->password}}"  type="password" >
   </div>
<br> 
 <div class="form-group">
        <label for="data6">E-mail</label>
        <input id="data6" class="form-control tri" name="email" value="{{isset($users->email) ? $users->email : ''}}"  type="text" >
   </div>
<br>
<div class="modal-footer">
    <button class="btn btn-sumbit btn3" type="submit" {{--data-dismiss="modal"--}}><img src="{{asset('images/no.png') }}" alt="add3" class="add3">  Выполнить</button>

  </div>
</form>

