
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
