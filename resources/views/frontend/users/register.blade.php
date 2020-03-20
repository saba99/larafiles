@extends('frontend.layouts.frontend')


@section('content')


<div class="col-xs-12 col-md-12 mt-4">


<div class="card">
    <div class="card-header alert-info">
       ورود به سایت 
    </div>
    <div class="card-body">
        @if(session('registerErr'))
<div calss="alert alert-danger">
<p>{{session('registerErr')}}</p>

</div>
        @endif
        <div class="row">
            <div class="col-xs-12 col-md-6 col-md-offset-3">
    <form method="post" action="{{route('account.post.register')}}">
            @csrf
             <div class="form-group">
    <label for="exampleInputEmail1">نام</label>
    <input type="text"  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">ایمیل</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رمز ورود</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
 
  <button type="submit" class="btn btn-success mt-3">ثبت نام </button>
</form>

            </div>
        </div>
    
    </div>
   
</div>







</div>


@endsection