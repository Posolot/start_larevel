@extends('layouts.layout')

@section('title', 'Редактирование пользователя')

@section('content')
    <h2>Редактирование пользователя</h2>

    <form action="{{ route('users.update', $user) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" required>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password">
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Подтвердите пароль:</label>
            <input type="password" name="password_confirmation" id="password_confirmation">
            @error('password_confirmation')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Обновить пользователя</button>
    </form>
@endsection

