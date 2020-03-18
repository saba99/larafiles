@extends('admin.layout.master')

{{--@extends('admin.layouts.admin')--}}

@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
<form action="{{route('admin.categories.update',$FileItem->id)}}" method="post">

@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')

    <div class="form-group">

   <lable for="file_title">نام دسته بندی:</lable>
   
   <input type="text" class="form-control" name="file_title"  value="{{old('name',isset($FileItem) ? $FileItem->file_title : '')}}">
</div>  
 
<div class="form-group">

   <lable for="file_description">توضیحات فایل:</lable>
   <textarea name="file_description" class="form-control" id="file_description" cols="30" rows="10">{{old('file_description',isset($FileItem) ? $FileItem->file_description : '')}}</textarea>
 
</div>

<div class="form-group">

    <lable for="fileItem">فایل:</lable>
    <input type="file"  name="fileItem" class="form-control" value="{{old('name',isset($FileItem) ? $FileItem->file_name : '')}}">
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