<form action="{{route('topic.store')}}" method="post">

@csrf
<div class="row">
   
   <div class="col-xs-12 col-md-6">
      @include('admin.partials.errors')
    <div class="form-group">

   <lable for="name">عنوان مطلب:</lable>
   
   <input type="text" class="form-control" name="name"  value="{{old('name',isset($userItem) ? $userItem->name : '')}}">
</div>  

<div class="form-group">
  
    <lable for="name">متن:</lable>
   <textarea  name="title" rows="6" class="form-control">

   </textarea>
</div>
 
 <div class="form-group">
   
    <button type="submit" class="btn btn-success" >
       ذخیره اطلاعات
    </button>
 </div>
   </div>
</div>


</form>