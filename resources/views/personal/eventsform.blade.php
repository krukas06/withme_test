
<h2>Добавление личного события </h2>
<form  action="/myevent_add" method="post">

                    {{csrf_field()}}
                    <div class="form-group">
                        <input name="name"  type="text" placeholder="Наименование">
                    </div>

                        <input  name="user_id" value="{{Auth::id()}}"  type="hidden">

                    <div class="form-group">
                        <input name="date"  type="date" placeholder="Дата">
                    </div>
                    <div class="form-group">
                        <input  name="text"  type="text" placeholder="Текст">
                    </div>




                    <div class="modal-footer">
                        <button class="btn btn-sumbit btn3" type="submit" {{--data-dismiss="modal"--}}><img src="{{asset('images/no.png') }}" alt="add3" class="add3">  Добавить</button>

                    </div>
                </form>

<br>



<h2>Добавление события для усопшего </h2>
                 <form  action="/event_add" method="post">


                    {{csrf_field()}}

			
		    <div class="form-check">
                <input class="form-check-input" type="radio" name="type_flag" value="1" checked>
                <label class="form-check-label abc" for="gridRadios1">
                    Личное
                </label>

                <input class="form-check-input" type="radio" name="type_flag"  value="0">
                <label class="form-check-label" for="gridRadios2">
                    Общественное
                </label>
            </div>

                    <div class="form-group">
                        <input name="name"  type="text" placeholder="Наименование">
                    </div>

			<input  name="user_id" value="{{Auth::id()}}"  type="hidden">

	            <div class="form-group">
            <select  name="pages_id" placeholder="Страница" type="text">

		@foreach($pages as $page)

               @if( Auth::id() ==  $page->user_id) 
                    <option value="{{$page->id}}">{{$page->surname}} {{$page->name}} {{$page->Otchestvo}}</option>
                
		@endif
		@endforeach

            </select>
        </div>

                    <div class="form-group">
                        <input name="date"  type="date" placeholder="Дата">
                    </div>
                    <div class="form-group">
                        <input  name="text"  type="text" placeholder="Текст">
                    </div>
                    
             
               

                    <div class="modal-footer">
                        <button class="btn btn-sumbit btn3" type="submit" {{--data-dismiss="modal"--}}><img src="{{asset('images/no.png') }}" alt="add3" class="add3">  Добавить</button>

                    </div>
                </form>

<br>
