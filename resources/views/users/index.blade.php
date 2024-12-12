@extends('layouts.layout')

@section('title', 'Список пользователей')

@section('content')
    <h2>Все пользователи</h2>

    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>Имя</th>
                <th>Email</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.edit', $user) }}">Редактировать</a> |
                        <form action="{{ route('users.destroy', $user) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{ route('users.create') }}">Создать нового пользователя</a>
@endsection

