@extends('admin.layouts.admin')



@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($plans && count($plans)>0)
<table class="table table-bordered">

<thead>
   @include('admin.plans.columns')
</thead>
@foreach($plans as $plan)

@include('admin.plans.item',$plan)

@endforeach
@else   

@include('admin.plans.noitem')
</table>
@endif

@endsection