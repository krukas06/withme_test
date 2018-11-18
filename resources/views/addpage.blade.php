@extends('layouts.app')

@section('content')
{{--
    <form action="/add_photo" method="post">
        {{csrf_field()}}
        <input type="file" name="img">
        <input type="text" name="pages_id" value="{{$pages_id ? $pages_id : ""}}">
        <input type="text" name="text">
        <input type="submit" class="btn btn-dark" value="загрузить фото">
    </form>--}}

{{--    <form action="/add" method="post">
        {{csrf_field()}}
        <input type="file" name="img" multiple>
    <input type="text" name="name">
    <input type="text" name="data_birth">
    <input type="text" name="data_dead">
    <input type="text" name="text">
    <input type="hidden" name="burials_id" value="1">
    <input type="hidden" name="user_id" value="1">
    <input type="text" name="number">
    <input type="text" name="city">
    <input type="text" name="Otchestvo">
    <input type="text" name="surname">
    <input type="submit" class="btn btn-info">
    </form>--}}

{{--<nav class="navbar navbar-expand-lg navbar-light">
    <p class="navbar-brand" id="logotip">Помню</p>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
                <a href="#" class="nav-link" id="search"><i class="fas fa-search"></i> Поиск</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" id="login"><i class="fas fa-sign-in-alt"></i> Войти</a>
            </li>
        </ul>
</nav>
</div>

<div class="container-fluid zag">
    <h1>Добавление памятной страницы</h1>
</div>





--}}{{--<form id="form" class = "form" action="" method="post" enctype="multipart/form-data">
    <div>
        <input type="file" id="img" multiple accept="image/*" name="img"/>
    </div>
    <div>
        <img id="img-preview" src="default-preview.jpg" />
        <br />

    </div>
    <div>
        <input type="reset" value="Отмена"/>
        <input type="submit" value="Загрузить"/>
    </div>
</form>--}}{{--

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>
    $('#img').change(function() {
        var input = $(this)[0];
        if (input.files && input.files[0]) {
            if (input.files[0].type.match('image.*')) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img-preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                console.log('ошибка, загрузите изображение');
            }
        } else {
            console.log('загрузите изображение');
        }
    });

    $('#reset-img-preview').click(function() {
        $('#img').val('');
        $('#img-preview').attr('src', '{{asset('img/artworks.jpg')}}');
    });

    $('#form').bind('reset', function() {
        $('#img-preview').attr('src', '{{asset('img/artworks.jpg')}}');
    });

</script>
<div class="container-fluid mid">
    <form action="/add" method="post">

        {{csrf_field()}}

        <input type="hidden" name="user_id" value="1">
        <div class="form-group">
            <input type="familiya" name="surname" class="form-control" id="familiya" placeholder="Фамилия">
        </div>
        <div class="form-group">
            <input type="name" name="name" class="form-control" id="name" placeholder="Имя">
        </div>
        <div class="form-group">
            <input type="otchestvo" name="Otchestvo" class="form-control" id="otchestvo" placeholder="Отчество">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="text" id="info" rows="3" placeholder="Описание"></textarea>
        </div>
        <div class="form-group">
            <select class="form-control" id=Область name="oblast_id" placeholder="Область" type="oblast">
                @foreach($oblasts as $oblast)
                    <option value="{{$oblast->id}}">{{$oblast->name}}</option>
                @endforeach

            </select>

            <div class="form-group">
                <select class="form-control" id="gorod" name="city" placeholder="Город" type="gorod">
                  @foreach($citys as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <select class="form-control" id="rajon" name="rajon" placeholder="Район" type="rajon">
                @foreach($oblasts as $oblast)
                    <option value="{{$oblast->id}}">{{$oblast->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input class="form-control" id="nazvanie" name="burials_id" placeholder="Название кладбища" value="1" type="nazvanie">



        </div>
        <--}}{{--div class="form-group">
            <input type="uchastok" name="uchastok" class="form-control" id="uchastok" placeholder="Номер участка">
        </div>

        <div class="form-group">
            <input type="mogila" name="mogila" class="form-control" id="mogila" placeholder="Номер могилы">
        </div>

        <div class="form-group">
            <label for="API1 API2">Координаты захоронения</label>
            <input type="API1" name="API1" class="form-control" id="API1" placeholder="Широта"> <input type="API2" name="API2" class="form-control" id="API2" placeholder="Долгота">
            <div class="form-group">--}}{{--
                <label for="date1">Дата Рождения</label>
                <input type="date" name="data_birth" class="form-control" id="date1">
            </div>
            <div class="form-group">
                <label for="date2">Дата смерти</label>
                <input type="date" name="data_dead" class="form-control" id="date2">
            </div>

  <div class="form-group">

    <input type="file" name="img[]" class="form-control" id="date2" multiple>
  </div>

            --}}{{--<label for="religiya">Религия</label>
            <div class="form-group">
                <select class="form-control" id="religiya" name="religion_id"  type="religiya">
                    <optgroup label="Религия">
                        <option></option>
                        <option value="1">Христианство</option>
                    </optgroup>
                </select>
            </div>--}}{{--
            <--}}{{--label>Видимость</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                    Для общего доступа
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Анонимно
                </label>--}}{{--
            </div>    <br>
            <button type="submit" class="btn btn-info">Добавить</button>

    </form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5s--}}{{--twEULTy" crossorigin="anonymous"></script>--}}
<nav class="navbar navbar-expand-lg navbar-light">
    <p class="navbar-brand" id="logotip">Помню</p>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item ">
                <a href="#" class="nav-link" id="search"><i class="fas fa-search"></i> Поиск</a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" id="login"><i class="fas fa-sign-in-alt"></i> Войти</a>
            </li>
        </ul>
</nav>
</div>

<div class="container-fluid zag">
    <h1>Добавление памятной страницы</h1>
</div>





<form id="form" class = "form" action="/add" method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <input type="hidden" name="user_id" value="1">
    <div>
        <input type="file" id="img" multiple accept="image/*" name="img"/>
    </div>
    <div>
        <img id="img-preview" src="default-preview.jpg" />
        <br />

    </div>
    <div>
        <p>Первое фото - главное</p>
        <input type="reset" value="Отмена"/>

    </div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
        $('#img').change(function() {
            var input = $(this)[0];
            if (input.files && input.files[0]) {
                if (input.files[0].type.match('image.*')) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#img-preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
                } else {
                    console.log('ошибка, загрузите изображение');
                }
            } else {
                console.log('загрузите изображение');
            }
        });

        $('#reset-img-preview').click(function() {
            $('#img').val('');
            $('#img-preview').attr('src', '{{asset('img/artworks.jpg')}}');
        });

        $('#form').bind('reset', function() {
            $('#img-preview').attr('src', '{{asset('img/artworks.jpg')}}');
        });

    </script>
    <div class="container-fluid mid">

        <div class="form-group">
            <input type="familiya" name="surname" class="form-control" id="familiya" placeholder="Фамилия">
        </div>
        <div class="form-group">
            <input type="name" name="name" class="form-control" id="name" placeholder="Имя">
        </div>
        <div class="form-group">
            <input type="otchestvo" name="Otchestvo" class="form-control" id="otchestvo" placeholder="Отчество">
        </div>
        <div class="form-group">
            <textarea class="form-control" name="text" id="info" rows="3" placeholder="Описание"></textarea>
        </div>
        <div class="form-group">
            <select class="form-control" id=Область name="oblast_id" placeholder="Область" type="oblast">
                @foreach($oblasts as $oblast)
                    <option value="{{$oblast->id}}">{{$oblast->name}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            <select class="form-control" id="gorod" name="city" placeholder="Город" type="gorod">
                @foreach($citys as $city)
                    <option value="{{$city->name}}">{{$city->name}}</option>
                @endforeach

            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="rajon" name="rajon" placeholder="Район" type="rajon">
                @foreach($citys as $city)
                    <option value="{{$city->name}}">{{$city->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <input class="form-control" id="nazvanie" name="burials_id" value="1" placeholder="Название кладбища" type="nazvanie">



        </div>
        {{--<div class="form-group">
            <input type="uchastok" name="uchastok" class="form-control" id="uchastok" placeholder="Номер участка">
        </div>

        <div class="form-group">
            <input type="mogila" name="mogila" class="form-control" id="mogila" placeholder="Номер могилы">
        </div>--}}

        <div class="form-group">
           {{-- <label for="API1 API2">Координаты захоронения</label>
            <input type="API1" name="API1" class="form-control" id="API1" placeholder="Широта"> <input type="API2" name="API2" class="form-control" id="API2" placeholder="Долгота">--}}
            <label class="label1" for="date1">Дата Рождения</label><label class="label2" for="date2">Дата смерти</label>
            <div class="form-group datta">
                <input type="date" name="data_birth" class="form-control datta1" id="date1">
                <input type="date" name="data_dead" class="form-control datta2" id="date2">
            </div>

            {{--<label for="religiya">Религия</label>
            <div class="form-group rel">
                <select class="form-control" id="religiya" name="religiya"  type="religiya">
                    <optgroup label="Религия">
                        <option></option>
                        <option>Христианство</option>
                    </optgroup>
                </select>
            </div>--}}
            {{--<label>Видимость</label><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label abc" for="gridRadios1">
                    Общий доступ
                </label>

                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Анонимно
                </label>
            </div>--}}    <br>
            <button type="submit" class="btn btn-info">Добавить</button>

</form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection