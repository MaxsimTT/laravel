<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Test Blade</title>      
    </head>
    <body>

        @extends('cart')

        @section('left')
            <div>Меню testblade</div>
        @endsection

        <p>Name: {{ $name }}</p>
        <p>Lastname: {!! $lastname !!}</p>
        <p>@{{ name }}</p>
        @php
            $a = 1;
            $b = 'string';
        @endphp
        <h3>{{ $b }}</h3>

        @if (is_numeric($b))
            <p>B - это число</p>
        @elseif (is_string($b))
            <p>B - не число</p>
        @else
            <p>B - не то не сё</p>
        @endif

        @if (isset($name))
            <p>{{ $name }}</p>
        @endif

        @isset($lastname)
            <p>{!! $lastname !!}</p>
        @endisset

        @switch($b)
            @case('hello')
                <p>Hello</p>
                @break
            @case('string')
                <p>String</p>
                @break
            @case('hi')
                <p>Hi</p>
                @break
            @default
                <p>No</p>
        @endswitch

        <p>
            @for ($i = 0; $i < 5; $i++)
                {{ $i }}
                @if ($i < 4)
                    ,
                @endif
            @endfor
        </p>

        @foreach ([1, 2, 4, 67, 33, 55] as $n)
            @if ($n == 2)
                @continue
            @endif
            {{ $loop->iteration }} - {{ $n }}
            @if (!$loop->last)
                ,
            @endif
        @endforeach

        @includewhen($b === 'hello', 'sub.bladereview', ['my_name' => 'Maksim'])
        @includeUnless($b === 'hello', 'sub.bladereview', ['my_name' => 'Test'])

        @each('sub.comment', ['Комментарий 1', 'Комментарий 2', 'Комментарий 3',], 'comments')

        <script>
            let x = {{ Js::from([1, 2, 3,]) }};
        </script>
        {{-- <p>App name: {{ env('APP_NAME') }}</p> --}}
    </body>
</html>
