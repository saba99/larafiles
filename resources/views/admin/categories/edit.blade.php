@extends('admin.layout.master')

{{--@extends('admin.layouts.admin')--}}

@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
<form action="{{route('admin.categories.update',$categoryItem->id)}}" method="post">

@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')

    <div class="form-group">

   <lable for="name">نام دسته بندی:</lable>
   
   <input type="text" class="form-control" name="packege_title"  value="{{old('name',isset($categoryItem) ? $categoryItem->name : '')}}">
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