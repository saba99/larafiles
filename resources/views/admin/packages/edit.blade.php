{{--@extends('admin.layouts.admin')--}}
@extends('admin.layout.master')

@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
<form action="{{route('admin.packages.update',$packageItem->id)}}" method="post">

  
@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')

    <div class="form-group">

   <lable for="package_title">عنوان پکیج :</lable>
   
   <input type="text" class="form-control" name="package_title"  value="{{old('package_title',isset($packegeItem) ? $packegeItem->package_title : '')}}">
</div>  
 
 <div class="form-group">

   <lable for="package_price">قیمت:</lable>
   
   <input type="text" class="form-control" name="package_price"  value="{{old('package_price',isset($packegeItem) ? $packegeItem->package_price : '')}}">
</div>  
<div class="form-group">

   <lable for="package_description">توضیحات:</lable>
   
   <input type="text" class="form-control" name="package_description"  value="{{old('package_description',isset($packegeItem) ? $packegeItem->package_description : '')}}">
</div> 
<div class="form-group">

   <lable for="package_price">دسته بندی ها:</lable>
  
   <select name="categories[]" class="select2 form-control" id="categories" multiple>
 @foreach($categories as $category)

<option value={{$category->id}} {{isset($package_categories) && in_array($category->id,$package_categories) ?  'select' : '' }}>{{$category->name}}</option>

@endforeach
</select>

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