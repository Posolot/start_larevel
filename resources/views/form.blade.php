@extends('layouts.layout')

@section('content')
    <h2>Отправить данные</h2>
    @if (session('status'))
        <div class="status">{{ session('status') }}</div>
    @endif
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <label for="name">Имя:</label>
        <input type="text" name="name" id="name" required>
        @error('name')
            <p>{{ $message }}</p>
        @enderror
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        @error('email')
            <p>{{ $message }}</p>
        @enderror

        <button type="submit">Отправить</button>
    </form>
@endsection

