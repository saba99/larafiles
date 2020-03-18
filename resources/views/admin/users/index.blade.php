@extends('admin.layouts.admin')


@section('ionicons')
<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
@endsection

@section('content')

@include('admin.users.notification')

@if($users && count($users)>0)
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

@endsection

