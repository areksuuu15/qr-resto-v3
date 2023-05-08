<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<section class="vh-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0">QR-Resto Register</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" method="POST" action="{{ route('register') }}">
                        @csrf

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register</h3>

            <div class="form-outline mb-4">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required  autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>

                                @enderror
               <label class="form-label" for="form2Example18" >
                {{ __('Name') }}
                </label>
 

            </div>


            <div class="form-outline mb-4">



                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required  autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
 

              <label class="form-label" for="form2Example28">
                {{ __('Password') }}
                </label>

            </div>

            
            <div class="form-outline mb-4">
                            <label for="password-confirm" class=" form-label ">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required >
                            </div>

            </div>

            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-lg btn-block" type="submit">
                                                  {{ __('Register') }}  
              </button>

            </div>

                              

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




