{{--@extends('admin.layouts.admin')--}}

@extends('admin.layout.master')

@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
<form action="{{route('admin.plans.update',$planItem->id)}}" method="post">

  
@csrf

<div class="row">
   
   <div class="col-xs-12 col-md-6">

      @include('admin.partials.errors')

    <div class="form-group">

   <lable for="file_title">عنوان طرح:</lable>
   
   <input type="text" class="form-control" name="plan_title"  value="{{old('plan_title',isset($planItem) ? $planItem->plan_title : '')}}">
</div>  
 <div class="form-group">

   <lable for="plan_limit_download_count">محدودیت دانلود روزانه:</lable>
   
   <input type="text" class="form-control" name="plan_limit_download_count"  value="{{old('plan_limit_download_count',isset($planItem) ? $planItem->plan_limit_download_count : '')}}">
</div>  

 <div class="form-group">

   <lable for="plan_price">قیمت:</lable>
   
   <input type="text" class="form-control" name="plan_price"  value="{{old('plan_price',isset($planItem) ? $planItem->plan_price : '')}}">
</div>  
<div class="form-group">

   <lable for="plans_days_count">تعداد روز اعتبار:</lable>
   
   <input type="text" class="form-control" name="plans_days_count"  value="{{old('plans_days_count',isset($planItem) ? $planItem->plans_days_count : '')}}">
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