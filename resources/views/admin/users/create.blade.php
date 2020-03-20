{{--@extends('admin.layouts.admin')--}}

@extends('admin.layout.master') 

@section('content')
<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                <div class="col-md-12 col-md-offset-3">

@include('admin.users.form')
</div>
       
</div> 
</div>
</div>
</div>

@endsection