@extends('layouts.app')

@section('content')
    <div class="col-12 mb-5">
        <div class="pl-3">
            <div class="profile-content__sidebar-info">
                <div class="row align-items-end">
                    <div class="col-3"><img src="{{ url('/') }}/img/user-image.png"></div>
                    <div class="col-8">
                        <div class="profile-content__sidebar-info--title">Имя Фамилия</div>
                        <div class="profile-content__sidebar-info--details">
                            <p>Название: ИТМО</p>
                            <p>Дата основания: 26 марта 1900 г.</p>
                            <p>Сайт: <a href="www.ifmo.ru" target="_parent">www.ifmo.ru</a></p>
                            <p>Адрес: Кронверкский пр., 49, Санкт-Петербург, 197101</p>
                            <p>Ректор: Владимир Николаевич Васильев</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mb-3">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="pill" href="#tab1">Институт</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab2">Кафедра</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab3">Группа</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="pill" href="#tab4">Преподователь</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane container-fluid active p-3" id="tab1">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container-fluid fade p-3" id="tab2">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container-fluid fade p-3" id="tab3">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane container-fluid fade p-3" id="tab4">
                <div class="row">
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">вычислительной техники</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Программирование</label>
                        </div>
                        <div class="form-group form-check">
                            <input class="form-check-input" type="checkbox" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">информационных систем</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
