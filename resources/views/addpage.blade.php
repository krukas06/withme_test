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

</nav>
</div>

<div class="container-fluid zag">
    <h1>{{(isset($pages->id)) ? 'Редактирование страницы' : 'Добавление памятной страницы'}}</h1>
</div>





<form id="form" class = "form" action=" {{(isset($pages->id)) ? route('pagesEdit', ['id'=>$pages->id]) : '/add'}}" method="post" enctype="multipart/form-data">

    {{csrf_field()}}

    <input type="hidden" name="user_id" value="{{Auth::id()}}">


    <div>

        @if(isset($pages->id))
                        <input type="file" id="img"  multiple {{--accept="image/*"--}} name="img[]"/>
                        @foreach($photos as $brand=>$massiv)
                            @foreach($massiv as $inner_key=>$value)

                                <img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$value}}" alt="">
                            @endforeach
                        @endforeach
        @else
                                    <input type="file" id="img"  multiple {{--accept="image/*"--}} name="img[]"/>
        @endif


    </div>
    {{--<div>
        <input type="file" id="img" multiple="multiple" --}}{{--accept="image/*"--}}{{-- name="img[]"/>
    </div>--}}
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
            @if(isset($pages->id))
                <input type="familiya" name="surname" value="{{$pages->surname}}" class="form-control" id="familiya" placeholder="Фамилия">
            @else
                <input type="familiya" name="surname" class="form-control" id="familiya" placeholder="Фамилия">
            @endif


        </div>
        <div class="form-group">
            @if(isset($pages->id))
                <input type="name" value="{{$pages->name}}" name="name" class="form-control" id="name" placeholder="Имя">
                @else
                <input type="name" name="name" class="form-control" id="name" placeholder="Имя">
            @endif
        </div>
        <div class="form-group">
            @if(isset($pages->id))
                <input type="otchestvo" value="{{$pages->Otchestvo}}" name="Otchestvo" class="form-control" id="otchestvo" placeholder="Отчество">
            @else
                <input type="otchestvo" name="Otchestvo" class="form-control" id="otchestvo" placeholder="Отчество">
            @endif


        </div>
        <div class="form-group">
            @if(isset($pages->id))
                <textarea class="form-control" name="text" id="info" rows="3" placeholder="Описание">{{$pages->text}}</textarea>
            @else
                <textarea class="form-control" name="text" id="info" rows="3" placeholder="Описание"></textarea>
            @endif



        </div>
        <div class="form-group">
            <select class="form-control" id='Oblast' name="oblast_id" placeholder="Область" type="oblast">
                @if(isset($pages->id))
                    <option value="{{$pages->oblast_id}}">{{$pages->oblast_id}}</option>
                    @else
                    @foreach($oblasts as $oblast)
                        <option value="{{$oblast->id}}">{{$oblast->name}}</option>
                    @endforeach
                @endif


            </select>
        </div>

        <div class="form-group">
            <select class="form-control" id="gorod" name="city" placeholder="Город" type="gorod">
                @if(isset($pages->id))
                    <option value="{{$pages->city}}">{{$pages->city}}</option>
                @else
                    @foreach($citys as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                    @endforeach
                @endif
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" id="rajon" name="rajon" placeholder="Район" type="rajon">

                @if(isset($pages->id))
                    <option value="{{$pages->rajon}}">{{$pages->rajon}}</option>
                @else
                    @foreach($rajons as $rajon)
                        <option value="{{$rajon->name}}">{{$rajon->name}}</option>
                    @endforeach
                @endif

            </select>
        </div>



        <div class="form-group">

            @if(isset($pages->id))
                <input class="form-control" id="nazvanie" name="burials_id" value="{{$pages->burials_id}}" placeholder="Название кладбища" type="nazvanie">
            @else
                <input class="form-control" id="nazvanie" name="burials_id" value="1" placeholder="Название кладбища" type="nazvanie">
            @endif




        </div>
        <div class="form-group">
            @if(isset($pages->id))
                <input type="uchastok" name="uchastok" class="form-control" id="uchastok" value="{{$pages->uchastok}}" placeholder="Номер участка">
            @else
                <input type="uchastok" name="uchastok" class="form-control" id="uchastok" placeholder="Номер участка">
            @endif

        </div>

        <div class="form-group">
            @if(isset($pages->id))
                <input type="mogila" name="mogila" value="{{$pages->mogila}}" class="form-control" id="mogila" placeholder="Номер могилы">
            @else
                <input type="mogila" name="mogila" class="form-control" id="mogila" placeholder="Номер могилы">
            @endif



        </div>

        <div class="form-group">
            <label for="coords">Координаты захоронения</label>
            @if(isset($pages->id))
                <input type="coords" name="coords" class="form-control" value="{{$pages->coords}}" id="coords" placeholder="Координаты">
            @else
                <input type="coords" name="coords" class="form-control" id="coords" placeholder="Координаты">
                <p class="header">Кликните по карте, чтобы узнать адрес</p>
                <div id="map"></div>
            @endif



            <label class="label1" for="date1">Дата Рождения</label><label class="label2" for="date2">Дата смерти</label>
            <div class="form-group datta">
                @if(isset($pages->id))
                    <input type="date" name="data_birth" class="form-control datta1" value="{{$pages->data_birth}}" id="date1">
                    <input type="date" name="data_dead" class="form-control datta2" value="{{$pages->data_dead}}" id="date2">
                @else
                    <input type="date" name="data_birth" class="form-control datta1" id="date1">
                    <input type="date" name="data_dead" class="form-control datta2" id="date2">
                @endif

            </div>



            <label for="religiya">Религия</label>
            <div class="form-group rel">
                <select class="form-control" id="religiya" name="religiya"  type="religiya">
                    <optgroup label="Религия">
                        {{--@if(isset($pages->id))
                            <option></option>
                            <option value="{{$pages->religiya}}">{{$pages->religiya}}</option>
                        @else--}}
                            {{--@foreach($citys as $city)--}}
                                {{--<option></option>--}}
                                <option value="христианство">Христианство</option>
                            {{--@endforeach--}}
                       {{-- @endif--}}
                    </optgroup>
                </select>
            </div>


            {{--<label>Видимость</label><br>--}}
            {{--<div class="form-check">
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label abc" for="gridRadios1">
                    Общий доступ
                </label>

                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                <label class="form-check-label" for="gridRadios2">
                    Анонимно
                </label>
            </div>--}}    <br>
            <button type="submit" class="btn btn-info">{{(isset($pages->id)) ? 'Сохранение изменений' : 'Добавить'}}</button>

</form>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&amp;apikey=<ваш API-ключ>" type="text/javascript"></script>
<script src="{{asset('myscript/script.js')}}" type="text/javascript"></script>
@endsection
