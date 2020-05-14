@extends('frontend.layout.master')

@section('content') 

<section class="breadcrumb-area dir-rtl">
        <div class="container">
<div class="container-fluid bg-gray-light my-2 py-3 px-5" dir="rtl">

<div class="row my-1">
   @isset($query)
   <h6 class="ml-2">
    عبارت سرچ شده :<span class="bg-lightPurple">{{$query}}</span>
   </h6>
   @endisset
</div>
  
{{-- <div class="row my-3">

{{--  @if($results !=0)  --}}

    {{-- <div class="col-12 my-2">
        <p><span style="color:darkmagenta">{{$results}}</span>نتیجه یافت شد </p> 
    </div>

</div>  --}}
<div class="container">
    test 
    @if($results)
        start foreach   
        @foreach($results as $item)
        test  
        <a>{{$item->file_title}}</a>
        @endforeach
        endforeach
    @else 
        <p class="text-center my-5">نتیجه ای یافت نشد </p>
    @endif
</div>


</div>

</div>
</section>

@endsection