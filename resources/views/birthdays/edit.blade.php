@extends('layouts.layout')

@section('title', 'Редактировать день рождения')

@section('content')
    <h2>Редактировать день рождения</h2>

    <form action="{{ route('birthdays.update', $birthday->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="user_id">Выберите пользователя:</label>
            <select name="user_id" id="user_id" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" @if($user->id == $birthday->user_id) selected @endif>{{ $user->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Дата рождения:</label>
            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ $birthday->date_of_birth }}" required>
        </div>

        <div class="form-group">
            <label for="description">Описание (необязательно):</label>
            <textarea name="description" id="description" rows="3">{{ $birthday->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Сохранить изменения</button>
    </form>
@endsection

