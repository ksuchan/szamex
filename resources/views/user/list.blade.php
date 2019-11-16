@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{ route('users.add') }}"><button type="button" class="btn btn-primary">Dodaj nowego użytkownika</button></a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nazwa użytkownika</th>
                        <th scope="col">Role</th>
                        <th scope="col">Operacje</th>
                    </tr>
                </thead>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            @foreach ($user->roles AS $role)
                                {{ $role->name }}
                            @endforeach
                        </td>
                        <td>
                            @if ($user->id != 1)
                                @foreach ($roles AS $role)
                                    @if ($role->slug != 'user' && $role->slug != 'unverified')
                                        <div>
                                            @if (!$user->hasRole($role->slug))
                                                <a href="{{ route('users.role.add', ['user_id' => $user->id, 'role_slug' => $role->slug]) }}">Nadaj role {{ $role->name }}</a>
                                            @else
                                                <a href="{{ route('users.role.remove', ['user_id' => $user->id, 'role_slug' => $role->slug]) }}">Usuń role {{ $role->name }}</a>
                                            @endif
                                        </div>
                                    @endif 
                                @endforeach
                            @else
                                Brak dostępnych akcji
                            @endif
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
