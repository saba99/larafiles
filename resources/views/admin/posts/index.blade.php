

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


@if($posts && count($posts)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">



<thead>
    <tr>
      @include('admin.posts.columns')
    </tr>
</thead>
@foreach($posts as $post)

@include('admin.posts.item',$post)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div>
@endsection