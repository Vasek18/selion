@extends('layouts.app')

@section('content')

    <form action="{{ action('StudentController@answerTest', ['test'=>$test]) }}" method="post">
        {{ csrf_field() }}
        @foreach($questions as $i => $question)
            <div class="form-group">
                <label>{{ $i+1 }}) {{ $question->name }}</label>
                @foreach($question->answers as $answer)
                    <br>
                    <label>
                        <input type="radio" name="{{ $question->id }}" value="{{ $answer->id }}"> {{ $answer->answer }}
                    </label>
                @endforeach
            </div>
        @endforeach
        <button class="btn btn-primary">Отправить</button>
    </form>

@endsection