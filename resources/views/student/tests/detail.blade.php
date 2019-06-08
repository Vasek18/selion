@extends('layouts.app')

@section('content')

    <form action="{{ action('StudentController@answerTest', ['test'=>$test]) }}" method="post">
        {{ csrf_field() }}
        @foreach($questions as $i => $question)
            <div class="form-group">
                <label>{{ $i+1 }}) {{ $question->name }} @if ($question->required) * @endif</label>
                @if ($question->type->code == 'string')
                    <br>
                    <input type="string" name="{{ $question->id }}" class="form-control"
                           @if ($question->required) required @endif
                    >
                @else
                    @foreach($question->answers as $answer)
                        <br>
                        <label>
                            <input type="{{ $question->type->code }}" name="{{ $question->id }}"
                                   value="{{ $answer->id }}"
                                   @if ($question->required) required @endif
                            > {{ $answer->answer }}
                        </label>
                    @endforeach
                @endif
            </div>
        @endforeach
        <button class="btn btn-primary">Отправить</button>
    </form>

@endsection