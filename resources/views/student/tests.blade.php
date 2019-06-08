@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-3">
            <form action="{{ action('StudentController@tests') }}">
                <div class="form-group">
                    <label for="competence">Компетенции</label>
                    <select name="competences" id="competence" class="form-control">
                        <option value="">Выберите</option>
                        @foreach($competences as $competence)
                            <option value="{{ $competence->id }}">{{ $competence->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="competence">Работодатель</label>
                    <select name="employers" id="employer" class="form-control">
                        <option value="">Выберите</option>
                        @foreach($employers as $employer)
                            <option value="{{ $employer->id }}">{{ $employer->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button class="btn btn-primary">Поиск</button>
            </form>
        </div>
        <div class="col-9">
            <div class="list-group">
                @foreach($tests as $test)
                    <a href="#" class="list-group-item">
                        {{ $test->name }}
                    </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection
