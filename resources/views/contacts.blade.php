<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My page contacts</title>

    </head>
    <body>
        <p>Мы находимся по следующему адресу {{ $path }}</p>
        <x-my-feedback-form my-name="Max" email="test@qwe.com">
            <x-slot name="message">
                <i>После заполнения формы мы с Вами свяжемся в течение 24 часов</i>
            </x-slot>
        </x-my-feedback-form>
    </body>
</html>
