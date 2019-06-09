@extends('layouts.app')

@section('content')
    <div class="col-12 mb-5">
        <div class="pl-3">
            <div class="profile-content__sidebar-info">
                <div class="row align-items-end">
                    <div class="col-3"><img src="img/user-image.png"></div>
                    <div class="col-8">
                        <div class="profile-content__sidebar-info--title">{{ $user->name }}</div>
                        <div class="profile-content__sidebar-info--details">
                            @if ($user->university())
                                <p>Вуз: {{ $user->university()->name }}</p>
                            @endif
                            <p>Специальность: {{ $user->getSpecialty() }}</p>
                            @if ($user->university()->city)
                                <p>Город: {{ $user->university()->city->name }}</p>
                            @endif
                            <p>Почта: {{ $user->email }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-3 profile-content__main-content">
        <div class="pl-3">
            <h4>Результаты тестирования</h4>
            <p class="text-muted">Процентное соотношение навыков студента к требованиям
                рынка</p>
            @foreach($competences as $competence)
                <div class="progress mb-3">
                    <div class="progress-bar" role="progressbar"
                         style="width: {{ $competence->progress }}%;"
                         aria-valuenow="{{ $competence->progress }}" aria-valuemin="0"
                         aria-valuemax="100">{{ $competence->competence->name }}
                        ({{ $competence->progress }}% /
                        100%)
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
