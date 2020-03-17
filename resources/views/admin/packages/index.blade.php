@extends('admin.layouts.admin')


@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($packages && count($packages)>0)
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

@endsection