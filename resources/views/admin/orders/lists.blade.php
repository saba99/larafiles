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


@if($order )
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">

<thead>
    <tr>
      @include('admin.orders.ordercolumns')
    </tr>
</thead>
@foreach($order->packages as $package)

@include('admin.orders.orderitem',$package)

@endforeach

</table>
<table class="table-responsive border border-dark">

<thead>
  <p>
 <strong>نام خریدار:</strong> {{$order->user->name}}
</p>
<p>
 <strong>آدرس خریدار:</strong>{{$order->user->addresses[0]->address}}
</p>
<p>
 {{-- <strong>شهر و استان:</strong>{{$order->user->addresses[0]->city->name .  $order->user->addresses[0]->province->name}}  --}}
</p>
<p>
 <strong>کد پستی خریدار:</strong>{{$order->user->addresses[0]->post_code}}
</p>
</thead>
</table>
@endif
</div>
</div>
</div>
</div> 
@endsection