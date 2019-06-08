@extends('layouts.app')

@section('content')
    <div>Моя инфа</div>
    <div>Мои тесты</div>
    <a href="{{ action('StudentController@tests') }}">Пройти тесты</a>
@endsection
