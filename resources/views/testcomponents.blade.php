<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test components</title>

    </head>
    <body>
        <x-my-input input-type="text" value="значение"/>
        <x-my-input input-type="text" value="{{ $a }}"/>
        <x-my-input input-type="text" placeholder="Плейсхолдер"/>
        <x-my-error-message message_text="QWERTY"/>
    </body>
</html>