@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-3">
            <form action="{{ action('StudentController@tests') }}">
                <div class="form-group">
                    <label for="competence">Компетенции</label>
                    <select name="competence" id="competence" class="form-control">
                        <option value="">Выберите</option>
                        @foreach($competences as $competence)
                            <option value="{{ $competence->id }}"
                                    @if ( request()->get('competence') == $competence->id) selected @endif
                            >{{ $competence->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="competence">Работодатель</label>
                    <select name="employer" id="employer" class="form-control">
                        <option value="">Выберите</option>
                        @foreach($employers as $employer)
                            <option value="{{ $employer->id }}"
                                    @if ( request()->get('employer') == $employer->id) selected @endif
                            >{{ $employer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Поиск</button>
            </form>
        </div>
        <div class="col-9">
            <div class="list-group">
                @if (count($tests))
                    @foreach($tests as $test)
                        <a href="{{ action('StudentController@showTest', ['test'=>$test]) }}" class="list-group-item">
                            {{ $test->name }}
                            @if ($test->competences)
                                @foreach($test->competences as $competence)
                                    <span class="badge badge-pill badge-info">{{ $competence->name }}</span>
                                @endforeach
                            @endif
                        </a>
                    @endforeach
                @else
                    <p>Таких тестов нет</p>
                @endif
            </div>
        </div>
    </div>
@endsection
