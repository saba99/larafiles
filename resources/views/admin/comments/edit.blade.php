@extends('admin.layout.master')



@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
<form action="{{route('admin.comments.update',$commentItem->id)}}" method="post">
    
    <input type="hidden" name="_method" value="PATCH">

@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')

    <div class="form-group">

   <lable for="title">عنوان:</lable>
   
   <input type="text" class="form-control" name="title"  value="{{old('title',isset($commentItem) ? $commentItem->title : '')}}">
</div>  
 <div class="form-group">

   <lable for="description">توضیحات:</lable>
   
   <input type="text" class="form-control" name="description"  value="{{old('description',isset($commentItem) ? $commentItem->description : '')}}">
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