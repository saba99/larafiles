@extends('admin.layouts.admin')


@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($plans && count($plans)>0)
<table class="table table-bordered">

<thead>
    <tr>
      @include('admin.plans.columns')
    </tr>
</thead>
@foreach($plans as $plan)

@include('admin.plans.item',$plan)

@endforeach
</table>
@endif

@endsection