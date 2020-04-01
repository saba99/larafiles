<form action="{{route('videos.store')}}" method="post"  enctype='multipart/form-data'>

@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="name">نام ویدیو:</lable>
   
   <input type="text" class="form-control" name="title"  value="{{old('name',isset($videoItem) ? $videoItem->title : '')}}">
</div>  
 <div class="form-group">
<lable for="path">فایل ویدیو:</lable>
   
   <input type="file" class="form-control" name="path"  value="{{old('path',isset($videoItem) ? $videoItem->path : '')}}">
</div>  
<div class="form-group">
<lable for="file"> ویدیو تصویر:</lable>
   
   <input type="file" class="form-control" name="image"  value="{{old('image',isset($videoItem) ? $videoItem->image : '')}}">
</div> 
 <div class="form-group">
<lable for="name">قیمت ویدیو:</lable>
   
   <input type="text" class="form-control" name="price"  value="{{old('price',isset($videoItem) ? $videoItem->price : '')}}">
</div>
<div class="form-group">
<lable for="description">توضیحات:</lable>
   
   <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{old('name',isset($videoItem) ? $videoItem->description : '')}}</textarea>
</div>
 <div class="form-group">
   
    <button type="submit" class="btn btn-success" >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form>