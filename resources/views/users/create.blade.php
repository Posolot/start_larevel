@extends('layouts.layout')

@section('title', 'Создание пользователя')

@section('content')
    <h2>Создание нового пользователя</h2>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Имя:</label>
            <input type="text" name="name" id="name" required>
            @error('name')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
            @error('email')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Пароль:</label>
            <input type="password" name="password" id="password" required>
            @error('password')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Подтвердите пароль:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            @error('password_confirmation')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <button type="submit">Создать пользователя</button>
    </form>
@endsection

