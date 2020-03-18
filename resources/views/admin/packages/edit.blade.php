@extends('admin.layouts.admin')

@section('content')


<form action="{{route('admin.packages.update',$packageItem->id)}}" method="post">

  
@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')

    <div class="form-group">

   <lable for="packege_title">عنوان پکیج :</lable>
   
   <input type="text" class="form-control" name="packege_title"  value="{{old('packege_title',isset($packegeItem) ? $packegeItem->packege_title : '')}}">
</div>  
 
 <div class="form-group">

   <lable for="packege_price">قیمت:</lable>
   
   <input type="text" class="form-control" name="packege_price"  value="{{old('packege_price',isset($packegeItem) ? $packegeItem->packege_price : '')}}">
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


@endsection