{{--@if($errors->any())

@foreach($errors->all() as $error)


<div class="alert alert-danger">

    <p>{{$error}}</p>
</div>

@endforeach

@endif--}}


@if(count($errors)>0)
<div class="alert alert-danger">
  <ul class="list-unstyled">
  @foreach($errors->all() as $error)

<li>{{$error}}</li>
  @endforeach
</ul>
</div>
@endif