<form action="{{route('admin.categories.store')}}" method="post" >

@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="name">نام دسته بندی:</lable>
   
   <input type="text" class="form-control" name="name"  value="{{old('name',isset($categoryItem) ? $categoryItem->name : '')}}">
</div>  
 

 <div class="form-group">
   
    <button type="submit" class="btn btn-success" >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form>