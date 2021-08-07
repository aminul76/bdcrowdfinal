@extends('layouts.app')

@section('content')

<!--============  signin section  start ============-->
  <div class="bg-first">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 py-5">
                        <h4>Sign up</h4>

<!----------------------- signin from start------------------->
<form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row my-3">
                            <label for="name" class="col-12 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-12">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row ">
                            <label for="email" class="col-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-12">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-12 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="password-confirm" class="col-12 col-form-label text-md-right">{{ __('Re-enter password') }}</label>

                            <div class="col-12">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I am not a robot</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Sign me up for the BD Crowd newsletter</label>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">I agree to the Terms of Use and have read and understand the Privacy Policy</label>
                            </div>
                        <div class="form-group row">
                            <div class="col-12 ">
                                <button type="submit" class="w-100 mb-3 btn btn-first">
                                    {{ __('Sign up') }}
                                </button>
                            </div>
                        </div>
                    </form>
<!----------------------- signin from end------------------->
                        <div class="text-center ">
                            <p>Have an account?
                                <a class="text-decoration-none" href="{{route('login')}}"> Log in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--============  signin section  end ============-->
@endsection
