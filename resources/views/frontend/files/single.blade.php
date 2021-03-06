@extends('frontend.layouts.frontend')


@section('content')


<div class="col-xs-9 col-md-9 mt-4">
<div class="card">
    <div class="card-header">مشاهده جزییات فایل ها</div>
    <div class="card-body">
        
  <p>عنوان :{{$file_item->file_title}}</p>
    <p> توضیحات:{{$file_item->file_description}}</p>
    <p>{{$file_item->file_type}}</p>
     <p><span>نوع فایل : </span>
    <span class="{{$file_item->file_type}}">{{$file_item->file_type}}</span></p>
    <p>
        <span>{{$file_item->created_at}}</span>
    </p>
    </div> 
   
     
  </div>
</div>


<div class="col-xs-3 col-md-3">
<div class="card">
    <div class="card-header">
        خرید فایل
    </div>
    <div class="card-body">
       @if(session('FileErr'))

               <div class="alert alert-danger">
                   <p>{{session('FileErr')}}</p>
               </div>
              @endif
        
         @if(App\Utility\User::is_user_subscribed($current_user))

                <a   class="btn btn-primary btn-block" href="{{route('frontend.files.download',[$file_item->id])}}">دانلود فایل</a>
               <a data-fid="{{$file_item->id}}" class="btn btn-warning btn-block btn_report_file">گزارش خطا </a>

         @else 
        <a href="{{route('frontend.subscribes.index',$file_item->id)}}" class="btn btn-success btn-block">خرید این فایل</a>
        
    </form>
    @endif
    </div>
   
</div>

</div>

@endsection