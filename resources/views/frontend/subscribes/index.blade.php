@extends('frontend.layouts.frontend')


@section('content')


<div class="col-xs-12 col-md-12 mt-4">
<div class="card">
    <div class="card-header">طرح های اشتراکی </div>
    <div class="card-body">
        
     <table class="table table-borderd table-condensed table-hover">
         

        <div class="alert alert-info">
              @if(session('planErr'))

               <div class="alert alert-danger">
                   <p>{{session('planErr')}}</p>
               </div>
              @endif
          <p>
              اطلاعات خرید طرح اشتراکی
          </p>  </div>
              <tr>
                  <td>عنوان</td>
                  <td>{{$plan->plan_title}}</td>
              </tr>
               <tr>
                  <td>قیمت</td>
                  <td>{{number_format($plan->plan_price)}}</td>
              </tr>
              <tr>
                  <td>محدودیت دانلود روزانه</td>
                  <td>{{$plan->plan_limit_download_count}}</td>
              </tr>
              <tr>
                  <td>تعداد روز ها</td>
                  <td>{{$plan->plan_price}}</td>
              </tr>
      
     </table>
     <form action="{{route('frontend.subscribes.register',$plan->id)}}" method="post">
         @csrf
         <div class="form-group">
             
<input type="hidden"  name="plan_id" value="{{$plan->id}}">
            <button class="btn btn-success" type="submit">
                خرید این طرح 
            </button>
         </div>

     </form>
    </div> 
   
     
  </div>
</div>








@endsection