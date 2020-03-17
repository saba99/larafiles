@extends('admin.layouts.admin')



@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($payments && count($payments)>0)
<table class="table table-bordered">

<thead>
   @include('admin.payments.columns')
</thead>
@foreach($payments as $payment)

@include('admin.payments.item',$payment)

@endforeach
@else   

@include('admin.payments.noitem')
</table>
@endif

@endsection