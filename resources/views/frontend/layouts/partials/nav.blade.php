<nav class="navbar navbar-expand-lg navbar-light bg-light ">
  <a class="navbar-brand" href="#">فروشگاه فایل صبا </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     @if(!\Illuminate\Support\Facades\Auth::check()) 
    
      <li class="nav-item active">
        <a class="nav-link" href="{{route('account.register')}}">ثبت نام <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('account.login')}}">ورود</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    

      @else 
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    {{Auth::user()->name.' '.'خوش آمدید '}}
  </button>
  <div class="dropdown-menu">
  <a class="dropdown-item" href="{{route('user.dashboard')}}">پنل کاربری</a>
  <a class="dropdown-item" href="{{route('account.logout')}}">خروج</a>
  <a class="dropdown-item" href="#">Something else here</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="#">Separated link</a>
</div>
     @endif
  </ul>
  </div>
</nav>