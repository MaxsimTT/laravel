@extends('extendsview')

@section('title', 'Моя новая страница')

@section('left')
    @parent
    <div>Различные баннеры</div>
@endsection

@section('content')
    <div>Контент</div>
@endsection
