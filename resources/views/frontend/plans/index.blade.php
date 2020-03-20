@extends('frontend.layouts.frontend')

@section('content')

<div class="col-xs-12 col-md-12 mt-4">
<div class="card">
    <div class="card-header">خرید اشتراک دانلود فایل </div>
    <div class="card-body">
        
     <table class="table table-borderd table-condensed table-hover">

        <thead>
            <tr>
                <th>عنوان</th>
                <th>قیمت</th>
                <th>تعداد روز</th>
                <th>محدودیت دانلود روزانه</th>
                <th>عملیات</th>

            </tr>
        </thead>
        <tbody>
   
              @if($plans && count($plans)>0)

                  @foreach($plans as $plan)
                     
                 <tr>
                     <td>{{$plan->plan_title}}</td>
                     <td>{{$plan->plan_price}}</td>
                     <td>{{$plan->plan_days_count}}</td>
                     <td>{{$plan->plan_limit_download_count}}</td>
                     <td> <a href="{{route('frontend.subscribes.index',$plan->id)}}" class="btn btn-success">خرید </a>

                     </td>
                 </tr>

                  @endforeach

              @endif
             
      </form>

        </tbody>
     </table>
    </div> 
   
     
  </div>
</div>








@endsection