<header>
    <div class="container">
        <link rel="stylesheet" href="{{ asset('css/header.css') }}">

        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Логотип">
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('/data') }}">Просмотреть данные</a></li>
                <li><a href="{{ url('/form') }}">Заполнить форму </a></li>
            </ul>
        </nav>
    </div>
</header>

