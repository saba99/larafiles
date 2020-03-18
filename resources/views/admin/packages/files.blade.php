{{--@extends('admin.layouts.admin')--}}

@extends('admin.layout.master') 

<style>

  body{
    direction: rtl;
  }
</style>

@section('content')
<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">
@include('admin.users.notification')

@if($files && count($files)>0)
<form action="" method="POST">
    @csrf
<ul class="list-unstyled">
  @foreach($files as $file)

<li>
               
    <input type="checkbox" name="files[]" value="{{$file->id}}" {{isset($package_file) && in_array($file->id,$package_files) ? 'checked' :''}}>

    {{$file->file_name }}
</li>

@endforeach  
</ul>
<div class="form-group">
   <input type="submit" class="btn btn-success" name="submit_package_files" value="ذخیره اطلاعات">
</div>
@endif
</form>

</div> 
</div>
</div>
</div>
</div>
@endsection