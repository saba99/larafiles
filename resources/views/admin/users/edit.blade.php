{{-- @extends('admin.layouts.admin') --}}

@extends('admin.layout.master')

@section('content')
<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">

<form action="{{route('admin.users.update',$userItem->id)}}" method="post">

  
@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="name">نام کامل:</lable>
   
   <input type="text" class="form-control" name="name"  value="{{old('name',isset($userItem) ? $userItem->name : '')}}">
</div>  
<div class="form-group">

   <lable for="email">ایمیل:</lable>
   
   <input type="email" class="form-control" name="email" value="{{old('email',isset($userItem) ? $userItem->email : '')}}">
</div>
<div class="form-group">

   <lable for="password">پسورد:</lable>
   
   <input type="password" class="form-control" name="password">
</div>
<div class="form-group">

   <lable for="role">نقش کاربر:</lable>
   
  <select name="role" id="role" class="form-control">
<option value="1"  {{isset($userItem)  && $userItem->role == 1  ? 'selected': '' }}>کاربر عادی</option>
<option value="2" {{isset($userItem)  && $userItem->role == 2  ? 'selected': '' }}>مدیر</option>
<option value="3" {{isset($userItem)  && $userItem->role == 3  ? 'selected': '' }}>اپراتور</option>
  </select>
</div>
 <div class="form-group">
    <lable for="wallet">موجودی کیف پول:</lable>
     <input type="text" class="form-control"  name="wallet" id="wallet" value="{{old('wallet',isset($userItem) ? $userItem->wallet : 0)}}">
 </div>
 <div class="form-group">
   
    <button type="submit" class="btn btn-success" >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form>
</div> 
</div>
</div>
</div>
</div>


@endsection