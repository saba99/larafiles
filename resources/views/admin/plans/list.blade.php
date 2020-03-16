@extends('admin.layouts.admin')



@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($files && count($files)>0)
<table class="table table-bordered">

<thead>
   @include('admin.plans.columns')
</thead>
@foreach($files as $file)

@include('admin.plans.item',$file)

@endforeach
</table>
@endif

@endsection