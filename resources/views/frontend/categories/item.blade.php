@extends('frontend.layouts.frontend')

@section('content')


<div class="col-xs-9 col-md-9 mt-4">
<div class="card">
    <div class="card-header">
        لیست دسته بندی تمام فایل ها :
        {{$categoryItem->name}}
    </div>
    <div class="card-body">
        <ul>
            @foreach($categoryFiles as $file)

             <li><a href=""></a></li>
            @endforeach
        </ul>
    </div>
    
</div>

</div>
<div class="col-xs-9 col-md-9 mt-4">
<div class="card">
    <div class="card-header">
       لیست پکیج های دسته بندی شده  :
        {{$categoryItem->name}}
    </div>
    <div class="card-body">
        <ul>
            @foreach($categoryPackages as $package)

             <li><a href="{{route('frontend.packages.details',[$package->id])}}">
                 {{$package->package_title}}
            </a></li>
            @endforeach
        </ul>
    </div>
    
</div>

</div>
@endsection



