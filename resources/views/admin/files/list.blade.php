{{-- @extends('admin.layouts.admin') --}}

@extends('admin.layout.master') 

@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')
<div class="content-wrapper">
  <div class="content">
@include('admin.users.notification')

<style>
  body{
    direction: rtl;
  }

</style>

@if($files && count($files)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">



<thead>
   @include('admin.files.columns')
</thead>
@foreach($files as $file)

@include('admin.files.item',$file)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div>

@endsection