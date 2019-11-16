@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('users.add_post') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="user-name">@</span>
                    </div>
                    <input name="username" type="text" class="form-control" placeholder="Nazwa użytkownika" aria-label="Nazwa użytkownika" aria-describedby="user-name">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="email">@</span>
                    </div>
                    <input name="email" type="email" class="form-control" placeholder="Adres e-mail" aria-label="Adres e-mail" aria-describedby="email">
                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="password">*</span>
                    </div>
                    <input name="password" type="password" class="form-control" placeholder="Hasło" aria-label="Hasło" aria-describedby="password">
                </div>

                {{-- <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="password2">*</span>
                    </div>
                    <input type="password" class="form-control" placeholder="Powtórz hasło" aria-label="Powtórz hasło" aria-describedby="password2">
                </div> --}}

                <button type="submit" class="btn btn-primary">Dodaj</button>
            </form>
        </div>
    </div>
</div>
@endsection
