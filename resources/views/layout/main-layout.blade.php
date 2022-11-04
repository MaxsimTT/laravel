<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Заголовок страницы по умолчанию' }}</title>      
    </head>
    <body>
        <div>Шапка сайта</div>
        <div>
            <div>Основное меню</div>
            {{ $left }}
        </div>
        <div>{{ $content }}</div>
        <div>Подвал</div>
    </body>
</html>