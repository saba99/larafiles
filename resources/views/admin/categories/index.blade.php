@extends('admin.layout.master')

{{--@extends('admin.layouts.admin')--}} 

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


@if($categories && count($categories)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered" >

<thead>
    <tr>
      @include('admin.categories.columns')
    </tr>
</thead>
@foreach($categories as $category)

@include('admin.categories.item',$category)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div> 
@endsection