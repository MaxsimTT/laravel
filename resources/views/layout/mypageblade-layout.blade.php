<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Заголовок страницы по умолчанию' }}</title>

    </head>
    <body>

        @extends('cart')

        <div>
            <div>Основное меню</div>
            {{ $left }}
        </div>

        @isset($clients)
            <table>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>e-mail</th>
                </tr>
            @foreach ($clients as $client)
                <tr>
                    @foreach ($client as $data)
                        <td>{{ $data }}</td>
                    @endforeach
                </tr>
            @endforeach
            </table>
        @endisset
    </body>
</html>
