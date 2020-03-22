@extends('frontend.layouts.frontend')


@section('content')


<div class="col-xs-9 col-md-9 mt-4">
<div class="card">
    <div class="card-header">آخرین فایل ها</div>
    <div class="card-body">
        
    @if($files && count($files)>0 )
       <ul>
  @foreach($files as $file)

    <li>
        <a href="{{route('frontend.files.single',$file->id)}}">{{$file->file_title}}</a>
        </li>  

      @endforeach

       </ul>
        @endif
    
    </div> 
    
  </div>
</div>
<div class="col-xs-3 col-md-3 mt-4">
<div class="card">
  <div class="card-header">
   محبوب ترین فایل ها 
  </div>
  <div class="card-body">
   @if($popularFiles && count($popularFiles)>0)

   <ul>

    @foreach($popularFiles as $file)

         <li><a href="{{route('frontend.files.details',[$file->id])}}">{{$file->file_title}}</a></li>

    @endforeach
   </ul>


   @endif
  </div>
  
</div>

</div>
<div class="col-xs-9 col-md-9 mt-4">
<div class="card">
    <div class="card-header">آخرین پکیج ها</div>
    <div class="card-body">
        
    @if($packages && count($packages)>0 )
       <ul>
  @foreach($packages as $package)

     {{--  <li>
        <a href="{{route('frontend.packages.details',$package->id)}}">{{$package->package_title}}</a>
        </li>   --}}
         
     <li>
        <a href="{{route('frontend.packages.single',$package->id)}}">{{$package->package_title}}</a>
        </li> 
      @endforeach

       </ul>
        @endif
    
    </div> 
    
  </div>
</div>

<div class="col-xs-3 col-md-3 mt-4">
<div class="card">
  <div class="card-header">
   لیست دسته بندی های فایل ها 
  </div>
  <div class="card-body">
   @if($categories && count($categories)>0)

   <ul>

    @foreach($categories as $category)

         <li><a href="{{route('frontend.categories.item',[$category->id])}}">{{$category->name}}</a></li>

    @endforeach
   </ul>


   @endif
  </div>
  
</div>

</div>




@endsection