@extends('frontend.layouts.frontend')


@section('content')


<div class="col-xs-12 col-md-12 mt-4">


<div class="card">
    <div class="card-header alert-info">
       ورود به سایت 
    </div>
    <div class="card-body">
        @if(session('loginErr'))
<div calss="alert alert-danger">
<p>{{session('loginErr')}}</p>

</div>
        @endif
        <div class="row">
          <div class="col-xs-12 col-md-6 col-md-offset-3">
        <form method="post" action="{{route('account.post.login')}}">
            @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">ایمیل</label>
    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">رمز ورود</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
   <div class="form-check">
    <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">مرا به خاطر بسپار</label>
  </div> 
  <button type="submit" class="btn btn-primary mt-3">ذخیره</button>
</form>
          </div>
        </div>

    </div>
   
</div>







</div>


@endsection