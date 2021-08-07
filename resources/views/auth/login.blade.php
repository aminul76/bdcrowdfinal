@extends('layouts.app')

@section('content')
 <!--============  signin section  start ============-->
     <div class="bg-first">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 offset-md-4 py-5">
                        <h4>Sign In</h4>

    <!------------ form start --------- -->

                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row mb-2">
                            <label for="email" class="col-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password" class="col-12 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (Route::has('password.request'))
                                    <a class="form-text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-12">
                                <button type="submit" class="w-100 mb-3 btn btn-first">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>


                       
    <!------------ form end --------- -->

                        <div class="text-center ">
                            <p>New to bd crowd?
                                <a class="text-decoration-none" href="{{ route('register') }}">Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============  signin section  end ============-->


@endsection
