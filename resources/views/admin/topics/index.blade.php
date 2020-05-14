
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

@if($users && count($users)>0)
<div class="box-body">
<div class="table-responsive border border-dark">
<table class="table table-bordered">

<thead>
    <tr>
        
        <th>  نام کاربر</th>
        
        <th>تاریخ ایجاد </th>
    </tr>
</thead>
@foreach($topics as $topic)

@include('admin.topics.item',$user)

@endforeach
</table>
@endif
</div>
</div>
</div>
</div> 
@endsection