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
<div id="wrapper">

<div class="logo">
    <nav class="navbar navbar-expand-lg navbar-light bg-company">
       <a class="navbar-brand logoti" href="#">Помню</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav ml-auto classka">
                <li class="nav-item poiska" data-toggle="modal" data-target="#exampleModal3">
                    <a href="#" class="nav-link" id="search" data-toggle="modal" data-target="#exampleModal" ><img src="{{asset('images/poisk.png') }}" alt="">поиск</a>
                </li>

                <li class="nav-item vhoda"  data-toggle="modal">
                    <a href="/personal" class="nav-link" id="login"><img src="{{asset('images/vhod.png') }}" alt=""> войти</a>
                </li>

            </ul>
        </div>
    </nav>


@if(isset($status))
    <h3 style="color: green;">Сообщение успешно отправлено!</h3>
@endif
<div class="container-fluid videopocas justify-content-sm-center">
    <div class="row">
        <div class="col-lg-7 A">
            <video preload="auto" id="click" poster="{{asset('images/copy.png') }}">
                <source src="http://clips.vorwaerts-gmbh.de/VfE_html5.mp4" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' />
            </video>
        </div>
        <div class="col-lg-5 ">
            <div class="text1 B">
                <h1><b>ХРАНИТЕ ПАМЯТЬ<br>О БЛИЗКИХ</b></h1>
                <p>Наше приложение поможет сохранить<br> воспоминания о тех, кто уже не с нами. Для<br> вас, семьи и друзей, близких<br> родственников и знакомых, для потомков,<br> детей и внуков, которым будет важна<br> история своей семьи</p>
            </div>
            <br>
	    <div class="links">
            <a href="#"><img src="{{asset('images/2_google_block.png') }}" alt="google" class="google" ></a>
            <a href="#"><img src="{{asset('images/1_app_store_block.png') }}" alt="appstore" class="google" ></a>
	    </div>
        </div>
    </div>
</div>

@if(isset($data))
    <h2>Результат поиска</h2>
    <br>
    <br>
    @if(isset($data))
	
        @foreach($data as $dat)
	@if($dat->access == 0 || Auth::id() == $dat->user_id)
            <a href="{{route('page.show', ['id'=>$dat->id])}}">Открыть страницу</a><br>
	@endif
        @endforeach

    @endif
@endif


<div class="photo-gallery-my container-fluid">



    <div class="row justify-content-sm-center">

        <div class="item" data-toggle="modal" data-target="#exampleModal2" >
            <img src="{{asset('images/Layer 20.png') }}"  alt="image1" />
        </div>

        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 21.png') }}"  alt="image2" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 22.png') }}"  alt="image3" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 23.png') }}"  alt="image4" />
        </div>
        <div class="item" data-toggle="modal" data-target="#exampleModal2">
            <img src="{{asset('images/Layer 24.png') }}"  alt="image5" />
        </div>
    </div>


    <div class="row justify-content-sm-center">


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
    <div class="row justify-content-sm-center">
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
            <img src="{{asset('images/zagruz2.png') }}"  alt="загрузить ещё" />
        </a>
    </div>
    <div id="uniquename" style="display:none;">
        <div class="row justify-content-sm-center a">

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
        <div class="row justify-content-sm-center a">
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
        <div class="row justify-content-sm-center a">
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
<div class="container-fluid knopki justify-content-sm-center">
    <img src="{{asset('images/Vector Smart Object4.png') }}" alt="фото"><br>
    <a href="#"><h1><b>ДОБАВИТЬ ПАМЯТНУЮ СТРАНИЦУ</b></h1></a>
    <p>Разместите основную информацию о близком человеке, которого больше нет</p>
    <br><br>
    <img src="{{asset('images/Vector Smart Object12.png') }}" alt="фото"><br>
    <a href="#"><h1><b>ДОБАВИТЬ МАТЕРИАЛЫ</b></h1></a>
    <p>Добавьте фотографии и укажите место захоронения</p>
</div>
<div class="container-fluid svyaz justify-content-sm-center">
    <div class="row">
        <div class="col-lg-6 C">
            <h2><img src="{{asset('images/blocknot.png') }}" alt="Заказ"><b> ЗАКАЗАТЬ УСЛУГУ</b></h2>
            <br><br>
            <form action="/service" method="post">

                {{csrf_field()}}

	        <input type="hidden" name="user_id" value="{{Auth::id()}}">
                <input type="hidden" name="flag" value="0">
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
                <button type="submit" class="btn btn-primary btn2"><img src="{{asset('images/no.png') }}"  class="add" alt=""> ОТПРАВИТЬ</button>
            </form>
        </div>
    </div>
</div>
<div class="container-fluid  pamyat justify-content-sm-center">
    <div class="row">
        <div class="col-sm-auto Photolupa">
            <img src="{{asset('images/gruppa1.png') }}" alt="">
        </div>
        <div class="col-sm-6 ">
            <div class="text2">
                <h1><b>ХРАНИТЕ ПАМЯТЬ<br>О БЛИЗКИХ</b></h1>
                <p>Наше приложение поможет сохранить воспоминания о тех,<br> кто уже не с нами. Для вас, семьи и друзей, близких родственников<br> и знакомых, для потомков, детей и внуков, которым будет<br> важна история своей семьи</p>
            </div>
        </div>
    </div>
</div>
{{--<div class="container-fluid phone">
    <div class="row justify-content-sm-center">
        <div class="col-sm-auto">
            <a href="#" ><img src="{{asset('images/2_google_block.png') }}" alt="play market"class="googlemarket"></a>
        </div>
        <div class="col-sm-auto phone6">
            <img src="{{asset('images/phone66.png') }}" alt="iphone" >
        </div>
    background-image: url(../images/video.png);
    height: 475px;
-lg-7 {
    padding-left:15%;
    padding-top: 1%;
}
.col-lg-5 {
    padding-right:13%;
}
video {

    width:85%;
    height: 420px;
    cursor: pointer;
    border: 3px solid #917b5a;
    object-fit: inherit;
}
.text1  {

        <div class="col-sm-auto">
            <a href="#"><img src="{{asset('images/1_app_store_block.png') }}" alt="appstore" class="appstoremarket"></a>
        </div>
    </div>
</div>--}}

<div class="container-fluid phone">
    <div class="row justify-content-sm-center">
        <div class=" col-sm-auto">
            <a href="#" ><img src="{{asset('images/2_google_block.png') }}" alt="play market"class="googlemarket"></a>
        </div>
        <div class="col-sm-auto phone6">
            <img src="{{asset('images/phone66.png') }}" alt="iphone" >
        </div>
        <div class=" col-sm-auto">
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

                    <div class="modal-footer">
                        <button class="btn btn-sumbit btn3" type="submit" {{--data-dismiss="modal"--}}><img src="{{asset('images/no.png') }}" alt="add3" class="add3">  Найти</button>

                    </div>
                </form>

            </div>

        </div>
    </div>
</div>

<!-- ВТОРОЕ МОДАЛЬНОЕ ОКНО К ЛЮДЯМ-->
{{--<div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content odva">
            <div class="modal-body vtoraya">
                <img src="{{asset('images/Layer 20.png') }}" alt="photographiya">
                <p class="familia">ФАМИЛИЯ</p>
                <p class="IO">Имя Отчество</p>
                <p class="dati2"><strong>12.10.1947 - 25.03.2012</strong></p>
                <p class="nazva">Северо-западное кладбище, Место 1560</p>
            </div>
        </div>
    </div>

</div>--}}

<div class="modal fade " id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModal2" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content odva">
            <div class="modal-body vtoraya">
                <img src="{{asset('images/Layer 20.png') }}" alt="photographiya">
		<br>	
                <p class="FIO  familia">ФАМИЛИЯ</p>
                <p class="FIO  IO">Имя Отчество</p>
                <p class="dati2"><strong>12.10.1947 - 25.03.2012</strong></p>
                <p class="nazva">Северо-западное кладбище,</p>
		<p class="nazva"> Место 1560</p>
            </div>
        </div>
    </div>

</div>


<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h6 class="modal-title" id="exampleModalLongTitle">ВХОД/РЕГИСТРАЦИЯ</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body logink">
        <form id="contactForm1" action="{{ url("login/") }}" method="post">
		{{csrf_field()}}

            <div class="form-group">
              <input id="email1" class="form-control vhodim" name="email"  type="email" placeholder="E-mail" required>
            </div>
            <div class="form-group">
              <input id="password" class="form-control vhodim" name="password"  type="password" placeholder="Пароль" required>
            </div>
           <a href="{{ url("login/") }}"><button class="btn btn-sumbit btn5" type="submit">Войти</button></a>


        </form>
        <br>
        <a href="{{ url("register/") }}" class="regis">зарегистрироваться</a>
      </div>
      <div class="modal-footer footer">
        <span>Войти с помощью:</span>
        <div class="network">
<div class="text-center margin-bottom-20" id="uLogin"
             data-ulogin="display=panel;theme=flat;fields=first_name,last_name,email,nickname,photo,country;
                             providers=facebook,vkontakte,odnoklassniki,mailru;hidden=other;
                             redirect_uri={{ urlencode('http://' . $_SERVER['HTTP_HOST']) }}/ulogin;mobilebuttons=0;">
        </div>


   <a href="#">
<svg class="fb" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
<path fill="#3F51B5" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"/>
<path fill="#FFFFFF" d="M34.368,25H31v13h-5V25h-3v-4h3v-2.41c0.002-3.508,1.459-5.59,5.592-5.59H35v4h-2.287  C31.104,17,31,17.6,31,18.723V21h4L34.368,25z"/>
</svg>
   </a>
   <a href="#">
<svg class="vk" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" width="48px" height="48px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve">
<path fill="#0288D1" d="M42,37c0,2.762-2.238,5-5,5H11c-2.761,0-5-2.238-5-5V11c0-2.762,2.239-5,5-5h26c2.762,0,5,2.238,5,5V37z"/>
<path fill="#FFFFFF" d="M33.185,27.358c2.081,1.95,2.513,2.902,2.583,3.02c0.861,1.446-0.953,1.561-0.953,1.561l-3.473,0.048  c0,0-0.748,0.149-1.73-0.532c-1.299-0.9-3.075-3.243-4.029-2.939c-0.968,0.31-0.66,2.765-0.66,2.765s0.006,0.301-0.214,0.542  C24.47,32.078,24,31.981,24,31.981h-1c0,0-3.708,0.015-6.729-3.164c-3.293-3.467-6.049-9.944-6.049-9.944s-0.167-0.413,0.014-0.631  C10.443,17.995,11,18,11,18h3.714c0,0,0.349,0.048,0.6,0.236c0.208,0.15,0.323,0.441,0.323,0.441s0.448,1.206,1.244,2.595  c1.551,2.712,2.274,3.305,2.801,3.012c0.768-0.423,0.537-3.829,0.537-3.829s0.015-1.241-0.387-1.79  c-0.311-0.43-0.895-0.554-1.153-0.59c-0.211-0.023,0.132-0.516,0.578-0.736c0.669-0.329,1.851-0.35,3.246-0.336  C23.59,17.015,24,17,24,17c1.281,0.313,0.846,1.522,0.846,4.416c0,0.929-0.165,2.234,0.496,2.664  c0.286,0.188,1.311,0.216,3.05-2.772c0.826-1.418,1.481-2.751,1.481-2.751s0.138-0.298,0.346-0.425  C30.436,18.001,30.725,18,30.725,18l3.91,0.018c0,0,1.176-0.145,1.365,0.394c0.201,0.562-0.48,1.546-2.076,3.698  C31.299,25.646,31.008,25.317,33.185,27.358z"/>
</svg>

</a>
<a href="">
<svg class="ok" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 48 48" enable-background="new 0 0 48 48" xml:space="preserve" width="48px" height="48px">
<path fill="#FF9800" d="M42,37c0,2.8-2.2,5-5,5H11c-2.8,0-5-2.2-5-5V11c0-2.8,2.2-5,5-5h26c2.8,0,5,2.2,5,5V37z"/>
<path fill="#FFFFFF" d="M26.9,30.4c1.5-0.3,2.9-0.9,4.1-1.7c1-0.6,1.3-1.9,0.7-2.9c-0.6-1-1.9-1.3-2.9-0.7c-2.9,1.8-6.7,1.8-9.6,0  c-1-0.6-2.3-0.3-2.9,0.7c-0.6,1-0.3,2.3,0.7,2.9c1.3,0.8,2.7,1.4,4.1,1.7l-4,4c-0.8,0.8-0.8,2.1,0,3c0.4,0.4,0.9,0.6,1.5,0.6  c0.5,0,1.1-0.2,1.5-0.6l3.9-3.9l3.9,3.9c0.8,0.8,2.1,0.8,3,0c0.8-0.8,0.8-2.1,0-3C30.9,34.4,26.9,30.4,26.9,30.4z M24,10  c-3.9,0-7,3.1-7,7c0,3.9,3.1,7,7,7c3.9,0,7-3.1,7-7C31,13.1,27.9,10,24,10z M24,20c-1.7,0-3-1.3-3-3c0-1.7,1.3-3,3-3  c1.7,0,3,1.3,3,3C27,18.7,25.7,20,24,20z"/>
</svg>

 </a>
  <a href="">   
<svg class="twitter" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   viewBox="0 0 400 400" style="enable-background:new 0 0 400 400;" xml:space="preserve" width="36px" height="36px">
<style type="text/css">
  .st0{fill:#1DA1F2;}
  .st1{fill:#FFFFFF;}
</style>
<g id="Dark_Blue">
  <path class="st0" d="M350,400H50c-27.6,0-50-22.4-50-50V50C0,22.4,22.4,0,50,0h300c27.6,0,50,22.4,50,50v300
    C400,377.6,377.6,400,350,400z"/>
</g>
<g id="Logo__x2014__FIXED">
  <path class="st1" d="M153.6,301.6c94.3,0,145.9-78.2,145.9-145.9c0-2.2,0-4.4-0.1-6.6c10-7.2,18.7-16.3,25.6-26.6
    c-9.2,4.1-19.1,6.8-29.5,8.1c10.6-6.3,18.7-16.4,22.6-28.4c-9.9,5.9-20.9,10.1-32.6,12.4c-9.4-10-22.7-16.2-37.4-16.2
    c-28.3,0-51.3,23-51.3,51.3c0,4,0.5,7.9,1.3,11.7c-42.6-2.1-80.4-22.6-105.7-53.6c-4.4,7.6-6.9,16.4-6.9,25.8
    c0,17.8,9.1,33.5,22.8,42.7c-8.4-0.3-16.3-2.6-23.2-6.4c0,0.2,0,0.4,0,0.7c0,24.8,17.7,45.6,41.1,50.3c-4.3,1.2-8.8,1.8-13.5,1.8
    c-3.3,0-6.5-0.3-9.6-0.9c6.5,20.4,25.5,35.2,47.9,35.6c-17.6,13.8-39.7,22-63.7,22c-4.1,0-8.2-0.2-12.2-0.7
    C97.7,293.1,124.7,301.6,153.6,301.6"/>
</g>
</svg>
</a> 
</div>
      </div>
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
<script src="//ulogin.ru/js/ulogin.js"></script>

</body>
</html>
