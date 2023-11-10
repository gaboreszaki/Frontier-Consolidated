@extends('components.layouts.auth')

@section('content')

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center">
        <img class="mb-4 me-3 d-inline" src="{{ asset('images/frcn_main_logo.png')}}" alt="Frontier Consolidated Logo" height="57">
        <h1 class="h3 mb-3 fw-normal d-inline">FRCN Site Admin</h1>
        </div>
        <div class="form-floating">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
            <label for="floatingInput">{{ __('Email Address') }}</label>
            @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control  @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required autocomplete="current-password">
            <label for="floatingPassword">{{ __('Password') }}</label>
            @error('password')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>

        <div class="form-check text-start my-3">
            <input name="remember" class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="flexCheckDefault">
                {{ __('Remember Me') }}
            </label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">{{ __('Login') }}</button>

        @if (Route::has('password.request'))
            <div class="text-end">
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            </div>
        @endif
        <p class="mt-5 mb-3 text-body-secondary text-center">Frontier Consolidated© 2020–2023</p>
    </form>

@endsection

