@extends('layouts.password')

@section('content')

<div class="container-fluid" id="fgpass">
    <div class="col-md-12" style="margin-top: 10% ;">
        <br>
    </div>
    <!-- ..................................... -->
    <div class="row" id="btn">
        <div class="col-md-4">
        </div>
        <div class="col-md-4">
            <div class="card">
                <br>
                <h1 style="text-align: center; color: #034791">ลืมรหัสผ่าน</h1>
                <hr>
                <div class="card-body" >
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <form method="POST" action="{{ route('password.email') }}">
                      @csrf
                    <p style="text-align: left">ระบุอีเมลที่กรอกไว้ในระบบ <b>* </b></p>
                    <!-- <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ระบุอีเมล..."> -->

                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="ระบุอีเมล..." autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    <br>
                    <br>
                    <!-- <center>
                        <a class="btn btn-danger" href="{{ route('login') }}">ยกเลิก</a>
                        &nbsp; &nbsp;
                        <a class="btn btn-warning" href="resetpassword.php">ดำเนินการต่อ
                        </a>
                        <button type="submit" class="btn btn-warning">
                            {{ __('ดำเนินการต่อ ') }}
                        </button>
                      </center> -->
                      <!-- <div class="form-group row mb-0"> -->
                        <div class="text-center">
                            <a  class="btn btn-danger" href="{{ route('login') }}">
                                {{ __('ยกเลิก ') }}
                            </a>
                            &nbsp;&nbsp;
                              <button type="submit" class="btn btn-warning">
                                  {{ __('ดำเนินการต่อ ') }}
                              </button>
                          </div>
                        <br>
                  </form>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4"></div>
</div>

@endsection

<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
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

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                              <button  class="btn btn-danger">
                                  {{ __('ยกเลิก ') }}
                              </button>
                                <button type="submit" class="btn btn-warning">
                                    {{ __('ดำเนินการต่อ ') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
