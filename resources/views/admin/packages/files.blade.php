@extends('admin.layouts.admin')

@section('content')



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
@endsection