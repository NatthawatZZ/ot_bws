@extends('layouts.password')

@section('content')
<div class="container-fluid">
      <div class="col-md-12" style="margin-top: 90px;">
          <br><br>
      </div>
      <div class="row" id="btn">
          <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <h1 style="text-align: center; color: #034791">รหัสผ่านใหม่</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <p style="text-align: left" >{{ __('E-Mail Address') }}</p>

                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="form-group row">
                            <p style="text-align: left">{{ __('รหัสผ่านใหม่') }}</p>


                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group row">
                            <p style="text-align: left">{{ __('ยืนยันรหัสผ่าน') }}</p>


                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-warning">
                                    {{ __('ยืนยัน') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
          <div class="col-md-4"></div>
    </div>
</div>

@endsection
