
@extends('admin.layout.master') 


@section('content')
<div class="content-wrapper">
  <div class="content">
@include('admin.users.notification')

 @if(Session::has('delete_photo'))
        <div class="alert alert-danger">
            <div>{{session('delete_photo')}}</div>
        </div>
    @endif

<style>
  body{
    direction: rtl;
  }

</style>


@if($photos && count($photos)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">

<thead>
    <tr>
      @include('admin.photos.columns')
    </tr>
</thead>
@foreach($photos as $photo)

@include('admin.photos.item',$photo)

@endforeach
</table>
@endif
</div>
</div>
<div class="col-md-12 text-center">
  
{{$photos->links()}}
</div>
</div>
</div> 
@endsection