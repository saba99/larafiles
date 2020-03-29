@extends('admin.layout.master')

@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
<form action="{{route('posts.update',$postItem->id)}}" method="POST">

   @csrf
     <input type="hidden" name="_method" value="PATCH">

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')
      <div class="form-group">

      <lable for="title">عنوان پست:</lable>
   
   <input type="text" class="form-control" name="title"  value="{{old('title',isset($postItem) ? $postItem->title : '')}}">
</div>  
 <div class="form-group">

   <lable for="slug">نام مستعار:</lable>
   
   <input type="text" class="form-control" name="slug"  value="{{old('slug',isset($postItem) ? $postItem->slug : '')}}">
</div>  

 <div class="form-group">

   <lable for="description">توضیحات:</lable>
   
   <input type="text" class="form-control" name="description"  value="{{old('description',isset($postItem) ? $postItem->description : '')}}">
</div> 
<div class="form-group">

   <lable for="file">تصویر:</lable>
   
   <input type="file" class="form-control" name="file"  value="{{old('file',isset($postItem) ? $postItem->file : '')}}">
</div> 
<div class="form-group">

   <lable for="meta_keywords">کلمه کلیدی:</lable>
   
   <input type="text" class="form-control" name="meta_keywords"  value="{{old('meta_keywords',isset($postItem) ? $postItem->meta_keywords : '')}}">
</div>
<div class="form-group">

   <lable for="meta_description">توضیحات متا:</lable>
   
   <input type="text" class="form-control" name="meta_description"  value="{{old('meta_description',isset($postItem) ? $postItem->meta_description : '')}}">
</div>
 <div class="form-group">
      <label for="my-input" class="form-check-label">منتشر شده</label>
      <input id="my-input" class="form-check-input" type="checkbox" name="status" value="{{old('meta_description',isset($postItem) ? $postItem->postItem : '')}}">
      <label for="my-input" class="form-check-label">منتشر نشده</label>
      <input id="my-input" class="form-check-input" type="checkbox" name="status" value="true">
      
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