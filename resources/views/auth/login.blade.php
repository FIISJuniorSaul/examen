@extends('layouts.config')

@section('content')
<div class="card text-bg-dark">
    <img src="../image/login.jpg" class="card-img" alt="..." height="810" width="1366" >
    <div class="card-img-overlay">
        <div class="container-xl px-4">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <!-- Basic login form-->
                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                        <div class="card-header justify-content-center">
                            <h3 class="fw-light my-4 text-center ">{{ __('Login') }}</h3>
                        </div>
                        <div class="card-body">
                            <!-- Login form-->
                            <div class="text-center imglogo">
                                <img src="../image/logo.png" alt="" height="200" width="200">
                            </div>
                            <h3 class="text-center namerayo">{{ __('Transport') }} RAYO SAC</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <!-- Form Group (email address)-->
                                <hr class="mt-0 mb-4" />
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">{{ __('User') }}</label>
                                    <input id="usuario" type="text"
                                        class="form-control @error('usuario') is-invalid @enderror" name="usuario"
                                        placeholder="example@rayosac.com" value="{{ old('usuario') }}" required
                                        autocomplete="usuario" autofocus>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Form Group (password)-->
                                <div class="mb-3">
                                    <label class="small mb-1" for="inputPassword">{{ __('Password') }}</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password" required
                                        placeholder="**********" autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Form Group (remember password checkbox)-->
                                <div class="mb-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="rememberPasswordCheck">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                                <!-- Form Group (login box)-->
                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div id="layoutAuthentication_footer">
                    <footer class="footer-admin mt-auto footer-dark">
                        <div class="container-xl px-4">
                            <div class="row">
                                <div class="col-md-6 small">{{ __('Copyright') }} © {{ __('Your') }} {{ __('Website') }} 2022</div>
                                <div class="col-md-6 text-md-end small">
                                    <a href="#!">{{ __('Privacy Policy') }}</a>
                                    ·
                                    <a href="#!">{{ __('Terms') }} &amp; {{ __('Conditions') }}</a>
                                </div>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </div>
  </div>

@endsection
