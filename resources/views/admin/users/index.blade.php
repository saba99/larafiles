{{-- @extends('admin.layouts.admin') --}}
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

@if($users && count($users)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">

<thead>
    <tr>
        <th>شناسه </th>
        <th>نام</th>
        <th>ایمیل</th>
        <th>موجودی</th>
       <th>تعداد پکیج های خریداری شده </th>
        <th>عملیات</th>
    </tr>
</thead>
@foreach($users as $user)

@include('admin.users.item',$user)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div> 
@endsection

