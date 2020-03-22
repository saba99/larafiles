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

<div class="col-xs-9 col-md-9 mt-4">
<div class="card">
    <div class="card-header">آخرین پکیج ها</div>
    <div class="card-body">
        
    @if($packages && count($packages)>0 )
       <ul>
  @foreach($packages as $package)

     <li>
        <a href="{{route('frontend.files.details',$file->id)}}">{{$package->package_title}}</a>
        </li> 

      @endforeach

       </ul>
        @endif
    
    </div> 
    
  </div>
</div>
</div>
<div class="col-xs-3 col-md-3">


</div>

@endsection