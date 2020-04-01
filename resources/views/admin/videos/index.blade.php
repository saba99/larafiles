@extends('admin.layout.master')


@section('content')
<div class="content-wrapper">
  <div class="content">
@include('admin.users.notification')

<style>
  body{
    direction: rtl;
  }

</style>


@if($videos && count($videos)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered" >

<thead>
    <tr>
      @include('admin.videos.columns')
    </tr>
</thead>
@foreach($videos as $video)

@include('admin.videos.item',$videos)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div> 
@endsection