@extends('layouts.app')

@section('content')
    <hr>
    <h2>Пройденные тесты</h2>

    <div class="list-group">
        @foreach($passed_tests as $passedTest)
            <div class="list-group-item">
                {{ $passedTest['name'] }}
                <span class="badge badge-pill badge-info">{{ $passedTest['competence'] }}</span>
                {{ $passedTest['answered_questions_count'] }}/{{ $passedTest['questions_count'] }}
                <p>{{ $passedTest['expert_comment'] }}</p>
            </div>
        @endforeach
    </div>
    <hr>
    <a href="{{ action('StudentController@tests') }}">Пройти тесты</a>
@endsection
