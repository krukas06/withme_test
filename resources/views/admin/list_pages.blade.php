<h2>Новые страницы на сайте</h2>


@foreach($pages as $page)
@if($page->flag == 0)
   <a href="{{route('page.show', ['id'=>$page->id])}}">Открыть страницу для потверждения</a><br>
@endif
@endforeach
