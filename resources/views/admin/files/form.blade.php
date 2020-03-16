<form action="{{route('admin.files.store')}}" method="post" enctype="multipart/form-data">

@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="file_title">عنوان فایل:</lable>
   
   <input type="text" class="form-control" name="file_title"  value="{{old('file_title',isset($fileItem) ? $fileItem->file_title : '')}}">
</div>  
<div class="form-group">

   <lable for="file_description">توضیحات فایل:</lable>
   <textarea name="file_description" class="form-control" id="file_description" cols="30" rows="10">{{old('file_description',isset($fileItem) ? $fileItem->file_description : '')}}</textarea>
 
</div>

<div class="form-group">

    <lable for="fileItem">فایل:</lable>
    <input type="file"  name="fileItem" class="form-control">
</div>


 <div class="form-group">
   
    <button type="submit" class="btn btn-success" >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form>