<form action="{{route('books.store')}}" method="post"  enctype='multipart/form-data'>

@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="name">نام کتاب:</lable>
   
   <input type="text" class="form-control" name="title"  value="{{old('name',isset($bookItem) ? $bookItem->title : '')}}">
</div>  
 <div class="form-group">
<lable for="path">فایل کتاب:</lable>
   
   <input type="file" class="form-control" name="path"  value="{{old('name',isset($bookItem) ? $bookItem->path : '')}}">
</div>  
<div class="form-group">
<lable for="file">تصویر:</lable>
   
   <input type="file" class="form-control" name="image"  value="{{old('name',isset($bookItem) ? $bookItem->image : '')}}">
</div> 
 <div class="form-group">
<lable for="name">قیمت کتاب:</lable>
   
   <input type="text" class="form-control" name="price"  value="{{old('name',isset($bookItem) ? $bookItem->price : '')}}">
</div>
<div class="form-group">
<lable for="description">توضیحات:</lable>
   
   <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{old('name',isset($bookItem) ? $bookItem->description : '')}}</textarea>
</div>
 <div class="form-group">
   
    <button type="submit" class="btn btn-success" >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form>