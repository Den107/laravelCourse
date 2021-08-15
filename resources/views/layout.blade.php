<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>

<body>

    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32">
                <use xlink:href="#bootstrap"></use>
            </svg>
            <span class="fs-4">Главная</span>
        </a>

        <ul class="nav nav-pills">
            <li class="nav-item"><a href="/" class="nav-link active" aria-current="page">Главная</a></li>
            <li class="nav-item"><a href="/category" class="nav-link">Категории новостей</a></li>
            <li class="nav-item"><a href="/news" class="nav-link">Все новости</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Авторизация</a></li>
            <li class="nav-item"><a href="/addNews" class="nav-link">Добавить новость</a></li>
        </ul>
    </header>
    <div class="container">
        @yield('content')
    </div>


    <footer class="py-3 my-4">
        <ul class="nav justify-content-center border-bottom pb-3 mb-3">
            <li class="nav-item"><a href="/" class="nav-link px-2 text-muted">Главная</a></li>
            <li class="nav-item"><a href="/category" class="nav-link px-2 text-muted">Категории новостей</a></li>
            <li class="nav-item"><a href="/news" class="nav-link px-2 text-muted">Все новости</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Авторизация</a></li>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Добавить новость</a></li>
        </ul>
        <p class="text-center text-muted">© 2021 Company, Inc</p>
    </footer>
</body>

</html>