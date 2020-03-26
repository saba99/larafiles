@extends('admin.layout.master')


@section('content')

@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')
<div class="content-wrapper">
  <div class="content">
@include('admin.users.notification')
@if(Session::has('update_comment'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_comment')}}</li>
  </ul>
</div>

@endif
@if(Session::has('delete_comment'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('delete_comment')}}</li>
  </ul>
</div>

@endif
  @if(Session::has('approved_comment'))

<div class="alert alert-success text-right col-12">

<ul class="list-unstyled">

  <li>{{Session('approved_comment')}}</li>
</ul>
</div>

@endif
@if(Session::has('rejected_comment'))

<div class="alert alert-danger text-right col-12">

<ul class="list-unstyled">

  <li>{{Session('rejected_comment')}}</li>
</ul>
</div>

@endif

<style>
  body{
    direction: rtl;
  }

</style>


{{--  @if($comments && count($comments)>0)  --}}
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered" >

<thead>
    <tr>
      @include('admin.comments.columns')
    </tr>
</thead>
@foreach($comments as $comment)

@include('admin.comments.item',$comment)

@endforeach
</table>
{{--  @endif  --}}
</div>
</div>
</div>
</div> 




@endsection