<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Заголовок страницы')</title>      
    </head>
    <body>
        <div>Шапка сайта</div>
        <div>
            @section('left')
                <div>Основное меню</div>
            @show
        </div>
        <div>
            @yield('content')
        </div>
        <div>Подвал</div>
        <p>@importantmessage(Даня)</p>
    </body>
</html>