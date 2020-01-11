@extends('home')

@section('auth_content')
    <div class="auth-modal">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            
            <div class="input-wrapper">
                <input id="email" type="email" class="form-input" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-wrapper">
                <input id="password" type="password" class="form-input" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            @if (Route::has('password.request'))
                <div class="password-reset">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        Zapomniałeś hasła?
                    </a>
                </div>
            @endif

            {{--
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            --}}
            
            <div class="button-wrapper">
                <button type="submit" class="button blue">
                    Zaloguj
                </button>
            </div>

            <div class="new-account">
                <a class="btn btn-link" href="{{ route('register') }}">
                   Stwórz nowe konto!
                </a>
            </div>
        </form>
    </div>
@endsection
