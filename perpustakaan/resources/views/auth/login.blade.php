@extends('auth.layouts.master')
@section('content')


      <div class="container">

          <form class="form-signin" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
          {{csrf_field()}}
          <div class="panel periodic-login">
              <span class="atomic-number"></span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol">s</h1>
                  <p class="atomic-mass">Aplikasi</p>
                  <p class="element-name">CRUD Perpustakaan</p>

                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="email" class="form-text {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                    @if ($errors->has('email'))
                     <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                     </span>
                    @endif
                    <span class="bar"></span>
                    <label>Email</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password">
                    @if ($errors->has('password'))
                     <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                     </span>
                    @endif
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="remember" {{ old('remember') ? 'checked' : '' }}/> Remember me
                  </label>
                  <button type="submit" class="btn col-md-12">
                  {{ __('Login') }}
                  </button>
              </div>
                <div class="text-center" style="padding:5px;">
                    <a href="forgotpass.html">Forgot Password </a>
                    <a href="{{route('register')}}">| Signup</a>
                </div>

                  <div class="text-center" style="padding:5px;">
                  &copy FTI 2018 By Muhammad Rosyad | Besti Tantiyar Yusna | Ahmad Syauqy Ahadi | Muhammad Saripuddin |
                  </div>
                  <div class="clearfix"></div>
          </div>
        </form>

      </div>

@endsection