@extends('layouts.login')

@section('content')

  <div class="container-fluid">
    <nav class="navbar navbar-expand-md navbar-dark bg-white fixed-top">
      <br><br><left><a href="#"><img src="include/img/logo1.png"  height="60"></a></left>

      <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div id="my-nav" class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"><br>
            <h5>ระบบขอเบิกค่า OT และ ค่าเดินทาง</h5>
          </li>

        </ul>
      </div>
    </nav>
  </div>
  <br>
  <br>

  <div class="contain">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="card" id="logincontain">
          <img class="card-img-top" src="include/img/Untitled-2-01.jpg" alt="Card image cap">

          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf
            <h1 style="color:#034791" class="text-center">เข้าสู่ระบบ</h1>
            <form action="#" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail1">รหัสพนักงาน</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="รหัสพนักงาน">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <div class="form-group">
                <label for="password" >{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="รหัสผ่าน">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
              </div>
              <button type="submit" class="btn btn-block">
                  {{ __('เข้าสู่ระบบ') }}
              </button>

              <p>สมาชิกใหม่?
                  <a href="{{ route('register') }}">ลงทะเบียน</a><br>
                <!-- คลิกเพื่อสมัคร -->
                <!-- <a href="#">ลืมรหัสผ่าน?</a> -->
                @if (Route::has('password.request'))
                    <a  href="{{ route('password.request') }}">
                        {{ __('ลืมรหัสผ่าน') }}
                    </a>
                @endif

              </p>
            </form>
          </div>
        </div>
      </div><!-- ------- end row id login -------- -->
    <div class="col-md-4"></div>
    </div>
</div><!-- ------- end class container-fluid -------- -->

@endsection
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
