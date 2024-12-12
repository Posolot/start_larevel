<header>
    <div class="container">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">

        <div class="logo">
            <a href="{{ route('birthdays.index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Логотип">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('birthdays.index') }}">Главная</a></li>
                <li><a href="{{ route('users.index') }}">Просмотреть данные</a></li>
                <li><a href="{{ route('users.create') }}">Добавить пользователя</a></li>
                <li><a href="{{ route('birthdays.create') }}">Добавить день рождения</a></li>
            </ul>
        </nav>
    </div>
</header>

