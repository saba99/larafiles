@extends('admin.layout.master')

@section('styles')

<link rel="stylesheet" href="{{asset('assets/css/dropzone.css')}}">

@endsection

@section('content')

<div class="content-wrapper" style="min-height:920px;">

    <div class="box box-info " style="min-height:500px; padding:100px;">
   <div class="box-body">
       <div class="row">
                
@include('admin.photos.form')


       
</div> 
</div>
</div>
</div>

@section('scripts')

<script src="{{asset('assets/js/dropzone.min.js')}}"></script>

@endsection 



@endsection