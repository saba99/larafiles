@extends('admin.layout.master')

{{--@extends('admin.layouts.admin')--}}

@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
<form action="{{route('books.update',$bookItem->id)}}" method="post">

   {{method_field('PATCH')}}

@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')

    <div class="form-group">

   <lable for="title">نام کتاب:</lable>
   
   <input type="text" class="form-control" name="title"  value="{{old('name',isset($bookItem) ? $bookItem->title : '')}}">
</div>  
 
<div class="form-group">

   <lable for="price">قیمت:</lable>
   
   <input type="text" class="form-control" name="price"  value="{{old('price',isset($bookItem) ? $bookItem->price : '')}}">
</div>  
 <div class="form-group">

   <lable for="file">فایل:</lable>
   
   <input type="file" class="form-control" name="path"  value="{{old('path',isset($bookItem) ? $bookItem->path : '')}}">
   <input type="hidden" name="path"  value="{{$bookItem->path}}">

</div>  
 <div class="form-group">
<lable for="file">تصویر:</lable>
   
   <input type="file" class="form-control" name="image"  value="{{old('image',isset($bookItem) ? $bookItem->image : '')}}">

   <input type="hidden" name="path"  value="{{$bookItem->image}}">
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