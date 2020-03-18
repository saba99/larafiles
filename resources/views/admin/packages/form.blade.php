<form action="{{route('admin.packages.store')}}" method="post" >

@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="package_title">عنوان پکیج:</lable>
   
   <input type="text" class="form-control" name="package_title"  value="{{old('package_title',isset($packageItem) ? $packegeItem->package_title : '')}}">
</div>  
 

 <div class="form-group">

   <lable for="package_price">قیمت:</lable>
   
   <input type="text" class="form-control" name="package_price"  value="{{old('package_price',isset($packageItem) ? $packegeItem->package_price : '')}}">
</div>  
<div class="form-group">

   <lable for="package_price">دسته بندی ها:</lable>
  
   <select name="categories[]" class="select2 form-control" id="categories" multiple>
 @foreach($categories as $category)

<option value={{$category->id}}>{{$category->name}}</option>

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
