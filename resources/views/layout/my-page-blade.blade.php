<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ $title ?? 'Заголовок страницы по умолчанию' }}</title>
    </head>
    <body>
        <div>{{ $cart }}</div>
        <div>{{ $left }}</div>
        <div>{{ $clients }}</div>
    </body>
</html>
