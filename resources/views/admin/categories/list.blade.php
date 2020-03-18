@extends('admin.layouts.admin')



@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($categories && count($categories)>0)
<table class="table table-bordered">

<thead>
   @include('admin.categories.columns')
</thead>
@foreach($categories as $category)

@include('admin.categories.item',$category)

@endforeach
@else   

@include('admin.categories.noitem')
</table>
@endif

@endsection