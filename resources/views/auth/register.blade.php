@extends('home')

@section('auth_content')
    <div class="auth-modal">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input-wrapper">
                <input id="name" placeholder="nazwa użytkownika" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-wrapper">
                <input id="email" placeholder="e-mail" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-wrapper">
                <input id="password" placeholder="hasło" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-wrapper">
                <div class="col-md-6">
                    <input  placeholder="potwierdź hasło" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="button-wrapper">
                <button type="submit" class="button blue">
                    Zarejestruj
                </button>
            </div>
            <div class="new-account">
                <a class="btn btn-link" href="{{ route('login') }}">
                   Mam już konto!
                </a>
            </div>
        </form>
    </div>
@endsection
