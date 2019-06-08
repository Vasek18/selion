@extends('layouts.app')

@section('content')

    <form action="{{ action('StudentController@answerTest', ['test'=>$test]) }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="test_id" value="{{ $test->id }}">
        @foreach($questions as $i => $question)
            <div class="form-group">
                <label>{{ $i+1 }}
                    ) {{ $question->name }} @if ($question->required && $question->type->code != 'checkbox')
                        * @endif</label>
                @if ($question->type->code == 'string')
                    <br>
                    <input type="text"
                           name="question[{{ $question->id }}]"
                           class="form-control"
                           @if ($question->required) required @endif
                    >
                @elseif($question->type->code == 'checkbox')
                    @foreach($question->answers as $answer)
                        <br>
                        <label>
                            <input type="checkbox"
                                   name="question[{{ $question->id }}]"
                                   value="{{ $answer->answer }}"
                            > {{ $answer->answer }}
                        </label>
                    @endforeach
                @else
                    @foreach($question->answers as $answer)
                        <br>
                        <label>
                            <input type="radio"
                                   name="question[{{ $question->id }}]"
                                   value="{{ $answer->answer }}"
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