@extends('frontend.layouts.frontend')


@section('content')



<div class="col-xs-9 col-md-9 mt-4">
<div class="card">
    <div class="card-header"> مشاهده جزییات پکیج  </div>
    <div class="card-body">
        
  <p>عنوان :{{$package_item->package_title}}</p>
  <p>لیست فایل های این پکیج :</p>
  <ul>
  @foreach($packageFiles as $file)

  <li><a href="{{route('frontend.files.single',$file->id)}}">{{$file->file_title}}</a></li>

<li><img src="{{asset('/storage/'.$file->file_name)}}" class="img-responsive" style="width:100px;"></li>

  @endforeach
</ul>
    <p> توضیحات:{{$package_item->package_description}}</p>
    <p>{{$package_item->package_price}}</p>
     
        <span>{{$package_item->created_at}}</span>
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
        
         {{--  @if(App\Utility\User::is_user_subscribed($current_user))

                <a   class="btn btn-primary btn-block" href="{{route('frontend.files.download',[$file_item->id])}}">دانلود فایل</a>
               <a data-fid="{{$file_item->id}}" class="btn btn-warning btn-block btn_report_file">گزارش خطا </a>

         @else 
        <a href="{{route('frontend.subscribes.index',$file_item->id)}}" class="btn btn-success btn-block">خرید این فایل</a>
          --}}
    </form>
    {{--  @endif  --}}
    </div>
   
</div>

</div>



@endsection