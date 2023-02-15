

@extends('layouts.app')

@section('content')
@endsection


<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">Logo</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="POST" action="{{ route('login') }}">
                        @csrf

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Log in</h3>

            <div class="form-outline mb-4">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 
              <label class="form-label" for="form2Example18" >
                {{ __('Email Address') }}
                </label>
                           
            </div>

            <div class="form-outline mb-4">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 

              <label class="form-label" for="form2Example28">
                {{ __('Password') }}
                </label>

            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">
                                                  {{ __('Login') }}  
              </button>

            </div>

                                @if (Route::has('password.request'))
                                    <p class="small mb-5 pb-lg-2">
                                        <a class="text-muted" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </p>
                                @endif


            <p>Don't have an account? <a href="{{route('register')}}" class="link-info">Register here</a></p>

          </form>

        </div>

      </div>
      <div class="col-sm-6 px-0 d-none d-sm-block">
        <img src="{{asset('/img/burgerRamsayV3.png')}}"
          alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: left;">
 
      </div>
    </div>
  </div>
</section>

