@extends('layouts.layout')

@section('title', 'Календарь Дней Рождения')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/birthday.css') }}">
</head>

<h2>Календарь Дней Рождения</h2>

@if(session('status'))
    <div class="status">{{ session('status') }}</div>
@endif

<!-- Календарь -->
<div class="calendar">
    @foreach ($groupedBirthdays as $month => $birthdays)
        <div class="month-container">
            <h3 class="month-title">{{ \Carbon\Carbon::create()->month($month)->format('F') }}</h3>
            <div class="month">
                @foreach ($birthdays as $birthday)
                    <div class="birthday-event">
                        <span class="date">{{ \Carbon\Carbon::parse($birthday->date_of_birth)->format('d') }}</span>

                        <!-- Проверка на существование пользователя -->
                        <span class="name">
                            @if ($birthday->user)
                                {{ $birthday->user->name }}
                            @else
                                Пользователь не найден
                            @endif
                        </span>

                        <span class="description">({{ $birthday->description }})</span>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach
</div>

@endsection

