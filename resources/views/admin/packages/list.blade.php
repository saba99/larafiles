@extends('admin.layouts.admin')



@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($packeges && count($packages)>0)
<table class="table table-bordered">

<thead>
   @include('admin.packeges.columns')
</thead>
@foreach($packeges as $packeges)

@include('admin.packeges.item',$packege)

@endforeach
@else   

@include('admin.packeges.noitem')
</table>
@endif

@endsection