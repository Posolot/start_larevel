@extends('layouts.layout')

@section('title', 'Добавить День Рождения')

@section('content')
    <h2>Добавить День Рождения</h2>

    <form action="{{ route('birthdays.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="user_id">Пользователь:</label>
            <select name="user_id" id="user_id" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Дата рождения:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" required>
            @error('date_of_birth')
                <p>{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Описание:</label>
            <input type="text" name="description" id="description">
        </div>

        <button type="submit">Добавить</button>
    </form>

    <br>
    <a href="{{ route('birthdays.index') }}">Вернуться к календарю</a>
@endsection

