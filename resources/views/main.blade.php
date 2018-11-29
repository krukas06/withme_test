
{{--<form action="/search" method="post">

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

--}}


        <!doctype html>
<html lang="ru">
<head>
    <!--  meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/style2.css') }}">
    <title>Помню</title>
</head>
<body>
<div class="logo">
    <nav class="navbar navbar-expand-lg navbar-light">
        <p class="navbar-brand" id="logotip">Помню</p>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto classka">
                <li class="nav-item  data-toggle="modal" data-target="#exampleModal2"poiska">
                <a href="#" class="nav-link" id="search" data-toggle="modal" data-target="#exampleModal" ><img src="{{asset('images/poisk.png') }}" alt="">поиск</a>
                </li>
                <li class="nav-item  data-toggle="modal" data-target="#exampleModal2"vhoda ">
                <a href="/login" class="nav-link" id="login"><img src="{{asset('images/vhod.png') }}" alt=""> войти</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div class="container-fluid videopocas">
    <div class="row">
        <div class="col-lg-7 A">
            <video preload="auto" id="click" poster="img/videoback.png">
                <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
            </video>
        </div>
        <div class="col-lg-5 ">
            <div class="text1 B">
                <h1><b>ХРАНИТЕ ПАМЯТЬ<br>О БЛИЗКИХ</b></h1>
                <p>Наше приложение поможет сохранить<br> воспоминания о тех, кто уже не с нами. Для<br> вас, семьи и друзей, близких<br> родственников и знакомых, для потомков,<br> детей и внуков, которым будет важна<br> история своей семьи</p>
            </div>
            <br>
            <a href="#"><img src="{{asset('images/2_google_block.png') }}" alt="google" class="google" ></a>
            <a href="#"><img src="{{asset('images/1_app_store_block.png') }}" alt="appstore" class="google" ></a>
        </div>
    </div>
</div>

@if(isset($data))
    <h2>Результат поиска</h2>
    <br>
    <br>
    @if(isset($data))
        @foreach($data as $dat)
            {{$dat->name}}
        @endforeach
    @endif
@endif


<div class="photo-gallery-my container-fluid">
    <div class="row-fluid">


           {{-- @foreach($pages as $page)
            <div class="item" data-toggle="modal" data-target="#exampleModal2" >
                     @foreach((array) $page->img as $photo=>$value)
                         @foreach($value as $key=>$num)
                            @if($key == 0)
                                <img src="{{asset('images')}}/{{$num}}"  alt="image1" />
                            @endif
                          @endforeach

                     @endforeach
            </div>
            @endforeach--}}

    {{--<div class="item" data-toggle="modal" data-target="#exampleModal2" >
            @foreach($photos as $brand=>$massiv)
                @foreach($massiv as $inner_key=>$value)
                     <img style="width: 50px; height: 40px;" src="{{asset('images')}}/{{$value}}" alt="">
                @endforeach
            @endforeach
     </div>--}}


       {{-- @foreach($pages as $page)
            <p>$page->name</p>
        @endforeach--}}

        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 30.png') }}"  alt="image11" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 31.png') }}"  alt="image12" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 32.png') }}"  alt="image13" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 33.png') }}"  alt="image14" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 20.png') }}"  alt="image14" />
        </div>




    </div>
    <div class="row-fluid">
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 22.png') }}"  alt="image11" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 23.png') }}"  alt="image12" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 30.png') }}"  alt="image13" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 20.png') }}"  alt="image14" />
        </div>
        <div class="item1 data-toggle="modal" data-target="#exampleModal2" demo">
        <a href="javascript:showhide('uniquename')" class="dobavlenie">
            <img src="{{asset('images/zagruz.png') }}"  alt="загрузить ещё" />
        </a>
    </div>
    <div id="uniquename" style="display:none;">
        <div class="row-fluid">

            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 30.png') }}"  alt="image16" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 21.png') }}"  alt="image17" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 22.png') }}"  alt="image18" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 23.png') }}"  alt="image19" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 24.png') }}"  alt="image20" />
            </div>
        </div>
        <div class="row-fluid">
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 25.png') }}"  alt="image21" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 26.png') }}"  alt="image22" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 27.png') }}"  alt="image23" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 28.png') }}"  alt="image24" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 29.png') }}"  alt="image25" />
            </div>
        </div>
        <div class="row-fluid">
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 30.png') }}"  alt="image26" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 31.png') }}"  alt="image27" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 32.png') }}"  alt="image28" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 33.png') }}"  alt="image29" />
            </div>
            <div class="item" data-toggle="modal" data-target="#exampleModal2">
                <img src="{{asset('images/Layer 34.png') }}"  alt="image30" />
            </div>
        </div>
    </div>
</div>
</div>
<div class="container-fluid knopki">
    <img src="{{asset('images/Vector Smart Object4.png') }}" alt="фото"><br>
    <a href="/add_page"><h1><b>ДОБАВИТЬ ПАМЯТНУЮ СТРАНИЦУ</b></h1></a>
    <p>Разместите основную информацию о близком человеке, которого больше нет</p>
    <br><br>
    <img src="{{asset('images/Vector Smart Object12.png') }}" alt="фото"><br>
    <a href="#"><h1><b>ДОБАВИТЬ МАТЕРИАЛЫ</b></h1></a>
    <p>Добавьте фотографии и укажите место захоронения</p>
</div>
<div class="container-fluid svyaz">
    <div class="row">
        <div class="col-lg-6 C">
            <h2><img src="{{asset('images/blocknot.png') }}" alt="Заказ"><b> ЗАКАЗАТЬ УСЛУГУ</b></h2>
            <br><br>
            <form action="/service" method="post">

                {{csrf_field()}}
                <div class="form-group">
                    <input type="name1" class="form-control odin" id="name1" name="name"  placeholder="Имя" border="2">

                </div>
                <div class="form-group">
                    <input type="email" class="form-control odin" id="email" name="email"  placeholder="Email">

                </div>
                <div class="form-group">
                    <input type="telefon" class="form-control odin" id="telefon"  name="number" placeholder="Телефон">

                </div>
                <div class="form-group">
                    <input type="mesto" class="form-control odin" id="mesto" name="burials" placeholder="Место захоронения">
                </div>
                <div class="form-group">
                    <select class="form-control odin" name="usluga" id="exampleSelect1">
                        <option value="Уборка могилы">Уборка могилы</option>
                        <option value="Возложить цветы">Возложить цветы</option>
                    </select>
                </div>
                <div class="form-group">
    <textarea class="form-control odin" id="exampleTextarea" name="desription" rows="4"
              placeholder="Требуемая услуга"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn1"><img src="{{asset('images/no.png') }}"  class="add" alt=""> ЗАКАЗАТЬ</button>
            </form>
        </div>
        <div class="col-lg-6 D">
            <h2><img src="{{asset('images/vopros.png') }}" alt="Вопрос"><b> ОТПРАВИТЬ ВОПРОС/ПРЕДЛОЖЕНИЕ</b></h2>
            <br><br>
            <form action="/message" method="post">

                {{csrf_field()}}
                <div class="form-group">
                    <input type="name1" class="form-control dva" name="name" id="name2"  placeholder="Имя" >
                </div>
                <div class="form-group">
                    <input type="email" class="form-control dva" id="email2" name="email"  placeholder="Email">
                </div>
                <div class="form-group">
    <textarea class="form-control dva" id="vopros" name="vopros" rows="4"
              placeholder="Вопрос"></textarea>
                </div>
                <div class="form-group">
    <textarea class="form-control dva" id="predl" name="predlogenie" rows="5"
              placeholder="Предложение"></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn2"><img src="img/no.png"  class="add" alt=""> ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid pamyat">
    <div class="row">
        <div class="col-lg-4 Photolupa">
            <img src="{{asset('images/gruppa1.png') }}" alt="">
        </div>
        <div class="col-lg-6 ">
            <div class="text2">
                <h1><b>ХРАНИТЕ ПАМЯТЬ<br>О БЛИЗКИХ</b></h1>
                <p>Наше приложение поможет сохранить воспоминания о тех,<br> кто уже не с нами. Для вас, семьи и друзей, близких родственников<br> и знакомых, для потомков, детей и внуков, которым будет<br> важна история своей семьи</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid phone">
    <div class="row justify-content-md-center">
        <div class="col col-lg-2">
            <a href="#" ><img src="{{asset('images/2_google_block.png') }}" alt="play market"class="googlemarket"></a>
        </div>
        <div class="col-md-auto">
            <img src="{{asset('images/phone66.png') }}" alt="iphone" >
        </div>
        <div class="col col-lg-2">
            <a href="#"><img src="{{asset('images/1_app_store_block.png') }}" alt="appstore" class="appstoremarket"></a>
        </div>
    </div>
</div>
<div class="container-fluid politika">
    <a href="#">Политика конфеденциальности</a>

</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal" aria-hidden="true" >
    <div class="modal-dialog " role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ПОИСК</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close" >
                    <span aria-hidden="true" class="crest">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="contactForm" action="/search" method="post">

                    {{csrf_field()}}
                    <div class="form-group">
                        <input id="familiya" class="form-control tri" name="surname"  type="text" placeholder="Фамилия">
                    </div>
                    <div class="form-group">
                        <input id="name" class="form-control tri" name="name"  type="text" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input id="otchestvo" class="form-control tri " name="Otchestvo"  type="text" placeholder="Отчество">
                    </div>
                    <div class="form-group">
                        <input id="mestozah" class="form-control tri" name="burials_id"  type="text" placeholder="Место захоронения">
                    </div>
                    <div class="form-group">
                        <label for="data1">Дата рождения:</label>
                        <input id="data1" class="form-control tri" name="data_birth"  type="date" >
                    </div>
                    <div class="form-group">
                        <label for="data2">Дата смерти:</label>
                        <input id="data2" class="form-control tri" name="data_dead"  type="date" >
                    </div>

                    <input type="submit" value="найти">
            </div>
            <div class="modal-footer">
                <button class="btn btn-sumbit btn3" data-dismiss="modal"><img src="{{asset('images/no.png') }}" alt="add3" class="add3">  Найти</button>

            </div>
            </form>
        </div>
    </div>

</div>
<!-- ВТОРОЕ МОДАЛЬНОЕ ОКНО К ЛЮДЯМ-->
<div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content odva">
            <div class="modal-body vtoraya">
                <img src="img/Layer 20.png" alt="photographiya">
                <p class="familia">ФАМИЛИЯ</p>
                <p class="IO">Имя Отчество</p>
                <p class="dati2"><strong>12.10.1947 - 25.03.2012</strong></p>
                <p class="nazva">Северо-западное кладбище, Место 1560</p>
            </div>
        </div>
    </div>

</div>
<script>
    function showhide(id) {
        var e = document.getElementById(id);
        e.style.display = (e.style.display == 'block') ? 'none' : 'block';
    }
</script>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="{{asset('myscript/main2.js')}}"></script>
</body>
</html>
