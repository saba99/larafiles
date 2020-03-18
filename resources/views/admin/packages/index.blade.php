{{--@extends('admin.layouts.admin')--}}

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


@if($packages && count($packages)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">

<thead>
    <tr>
      @include('admin.packages.columns')
    </tr>
</thead>
@foreach($packages as $package)

@include('admin.packages.item',$package)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div> 
@endsection