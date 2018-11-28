@extends('layouts.app')

@section('content')
    {{--@foreach($photos as $brand=>$massiv)
        @foreach($massiv as $inner_key=>$value)
            <img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$value}}" alt="">
        @endforeach

    @endforeach


    <form action="/epif_add" id="contactform" method="post">

        <h2>Добавление эпитафия</h2>
        {{csrf_field()}}
        <input type="hidden" name="user_id" value="1">
        <input type="hidden" name="candles_id" value="1">
        <input type="hidden" name="pages_id" value="{{$pages->id}}">
        <input type="text" name="name">
        <input type="text" name="text">
        <select class="form-control" id="rajon" name="img_candle" placeholder="Район" type="rajon">
            @foreach($candles as $candle)
                <option value="{{$candle->img}}"><img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$candle->img}}" alt=""></option>
            @endforeach
        </select>
        <input type="submit" id="submit" value="add">

    </form>

    <br>
    <br>
    <br>

    <form action="/event_add" id="contactform" method="post">

        <h2>Добавление события</h2>
        {{csrf_field()}}
        --}}{{--<input type="hidden" name="user_id" value="1">
        <input type="hidden" name="candles_id" value="1">--}}{{--
        <input type="hidden" name="pages_id" value="{{$pages->id}}">
        <input type="hidden" name="category_id" value="1">
        <input type="text" name="name">
        <input type="text" name="text">

        <input type="submit" id="submit" value="add">

    </form>

    <h2>Эпитафии</h2>
    @foreach($epifs as $epif)
    --}}{{--@if($pages->id == $epif->page_id)
     <h1>{{$epif->name}}</h1>
    @endif--}}{{--
    @if($pages->id == $epif->pages_id)
        <p>{{$epif->name}}</p>
        <img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$epif->img_candle}}" alt="">

    @endif
    @endforeach

    <br>
    <br>

    <h2>События</h2>
    @foreach($events as $event)
        --}}{{--@if($pages->id == $epif->page_id)
         <h1>{{$epif->name}}</h1>
        @endif--}}{{--
        @if($pages->id == $event->pages_id)
            <p>{{$event->name}}</p>

        @endif
    @endforeach

    <br>


    <a href="{{route('pagesEdit', ['id'=>$pages->id])}}"><button class="btn btn-success">Редактирование страницы</button></a>--}}


    <div class="logo">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a href="index.html"><p class="navbar-brand" id="logotip">Помню</p></a>
        </nav>
    </div>

    <div class="container-fluid mainphoto">
        <div class="row">
            <div class="col photo">
                <img src="img/main.png" alt="Главная фотография" />
            </div>

            <div class="col-lg info">
                <div class="text1">
                    <br>
                    <h1><strong>ФАМИЛИЯ ИМЯ ОТЧЕСТВО</strong></h1>
                    <p class="data2"><b>12.10.1947 - 25.03.2012</b><br>
                    <p class="cladbishe">Северо-западное кладбище<br>
                        ряд 10<br>место 1526</p>
                    <p class="cladbishe">посмотреть на карте  <img src="
            img/metka.png" alt=""></p>
                    <hr>
                    <article>«Очень любила своих внуков»</article>
                </div>

            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div class="contatiner-fluid" id="slider1">
        <div class="thumbelina-but horiz left">&#706;</div>
        <ul>
            <li><img src="images/image1.jpg"></li>
            <li><img src="images/image2.jpg"></li>
            <li><img src="images/image3.jpg"></li>
            <li><img src="images/image4.jpg"></li>
            <li><img src="images/image5.jpg"></li>
            <li><img src="images/image6.jpg"></li>
        </ul>
        <div class="thumbelina-but horiz right">&#707;</div>
    </div>
    <div class="container-fluid menuvibora">
        <div class="row">
            <div class="col-5">
                <h2><img src="img/epitafii.png" alt=""> эпитафии</h2>
                <div id="div" class="layer container"></div>

            </div>
            <div class="col-7">
                <!-- СОБЫТИЯ-->
                <h2><img src="img/sobitiya.png" alt=""> события</h2>
                <div id="div" class="layer2 container">
                    <div class="container" id="zapis">
                        <p class="datasobitiya"><b>12 ноября (1947)</b></p>
                        <p class="nazvaniesobitiya">день рождение</p>
                        <p class="dneydosobitiya">осталось <img  class="calendar" src="img/sobit.png"> дней</p>

                        <hr class="zapiska">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid knopki">
        <div class="row">
            <div class="col-sm first js-button-campaign">

                <button type="submit" class="btn btn-primary btn1"><img src="img/no.png"  class="add" alt=""> ДОБАВИТЬ</button>
            </div>
            <div class="col-sm second js-button-campaign1">
                <button type="submit" class="btn btn-primary btn2"><img src="img/no.png"  class="flowers" alt=""> ВОЗЛОЖИТЬ ЦВЕТЫ</button>
            </div>
            <div class="col-sm thirt">
                <button type="submit" class="btn btn-primary btn3"><img src="img/no.png"  class="uborka" alt=""> УБРАТЬ МОГИЛУ</button>
            </div>
        </div>
    </div>
    <div class="container-fluid politika">
        <a href="#">Политика конфиденциальности</a>
    </div>
    <div class="overlay js-overlay-campaign">
        <div class="popup js-popup-campaign">
            <h1><strong>ЭПИТАФИЯ</strong></h1>
            <form>
                <div class="form-group">
                    <input type="avtor" class="form-control odin" id="avtor"  placeholder="Автор">

                </div>
                <div class="form-group">
                    <input type="email" class="form-control dva" id="email"  placeholder="E-mail">

                </div>
                <div class="form-group">
    <textarea class="form-control odin" id="txt" rows="4"
              placeholder="Текст"></textarea>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="svecha1" id="s1" value="option1" >
                    <label class="form-check-label abc" for="s1">
                        1
                    </label>

                    <input class="form-check-input" type="radio" name="svecha2" id="s2" value="option2">
                    <label class="form-check-label abc" for="s2">
                        2
                    </label>
                    <input class="form-check-input" type="radio" name="svecha3" id="s3" value="option3" >
                    <label class="form-check-label abc" for="s3">
                        3
                    </label>
                </div>
                <button type="submit" class="btn btn-primary btn4" value="Add" onClick="add()"><img src="img/no.png"  class="epitaf" alt=""> ЗАКАЗАТЬ</button>
            </form>
            <div class="close-popup js-close-campaign"></div>
        </div>
    </div>
    <!-- ВОЗЛАЖИТЬ ЦВЕТЫ -->
    <div class="overlay js-overlay-campaign1">
        <div class="popup js-popup-campaign1">
            <h1><strong>ВЫБЕРИТЕ ЦВЕТЫ</strong></h1>
            <form>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="cvetok1" id="c1" value="option11" >
                    <label class="form-check-label abc" for="c1">
                        от 1000р
                    </label>

                    <input class="form-check-input" type="radio" name="cvetok2" id="c2" value="option22">
                    <label class="form-check-label abc" for="c2">
                        от 1000р
                    </label>
                    <input class="form-check-input" type="radio" name="cvetok3" id="c3" value="option33" >
                    <label class="form-check-label abc" for="c3">
                        от 1000р
                    </label>
                </div>
                <div class="form-group">
                    <input type="nazva" class="form-control odin" id="nazva"  placeholder="Название цветов" >

                </div>
                <div class="form-group">
                    <input type="text" name="data" class="form-control data" id="data"  placeholder="Дата" onfocus="(this.type='date')">
                </div>
                <div class="form-group">
                    <input type="telefon" class="form-control dva" id="telefon"  placeholder="Телефон">

                </div>
                <div class="form-group">
                    <input type="email2" class="form-control dva" id="email2"  placeholder="E-mail">

                </div>
                <button type="submit" class="btn btn-primary btn4" value="Add" onClick="add()"><img src="img/no.png"  class="epitaf" alt=""> ЗАКАЗАТЬ</button>
            </form>
            <div class="close-popup js-close-campaign1"></div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- создание слайдера -->
    <script type="text/javascript">
        $(function(){

            $('#slider1').Thumbelina({
                $bwdBut:$('#slider1 .left'),    // Selector to left button.
                $fwdBut:$('#slider1 .right')    // Selector to right button.
            });

        })
    </script>

    <script type="text/javascript">
        var d = document;
        function add() {
            var div = d.getElementById("div"), txt = d.getElementById("txt");
            var newDiv = d.createElement("div");
            newDiv.innerHTML = txt.value;
            div.appendChild(newDiv);
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="{{ asset('myscript/main.js') }}"></script>

@endsection