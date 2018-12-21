<!doctype html>
<html lang="ru">
  <head>
     <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1 ">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link rel="stylesheet" href="{{asset('css/reg.css') }}">
<title>Забыли пароль</title>
  </head>
  <body>
    <style>
      /*индикатор совпадения паролей*/
    </style>
  	<div class="logo">
      <nav class="navbar navbar-expand-lg navbar-light">
       <a class="navbar-brand" href="#"><img src="{{asset('images/pomnu.png') }}" class="logotip" alt="Pomnu"></a>
        
        
     </nav>
    </div>
        
@if(isset($status))
<div class="status">
<p>{{$status}}</p>
</div>

@endif    	
      <div class="container registracia justify-content-sm-center">
        <h1>Восстановление пароля</h1>
      <br>
    	 <form name="form" action="{{ url("forgotpassword/") }}" method="post">
	 {!! csrf_field() !!}
 

            <div class="form-group">
              <input id="email" class="form-control tri" name="email" value="{{ old('email') }}"  type="email" placeholder="E-mail*" required>
            </div>
	 @if(isset($password))
	    <div class="form-group">
              <input id="email" class="form-control tri" name="password" value="{{$password }}"  type="hidden" placeholder="Пароль*" required>
            </div>
	@endif


      
    <div>

            <button onclick="alert('На ваш почтовый ящик был выслан новый пароль')"  class="btn button orange"  type="submit" name="submit" >Восстановить</button>
            </div>
        </form>
    </div>
      

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
  </body>
</html>
