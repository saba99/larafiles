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

@if($payments && count($payments)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">

<thead>
    <tr>
      @include('admin.payments.columns')
    </tr>
</thead>
@foreach($payments as $payment)

@include('admin.payments.item',$payment)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div> 
@endsection