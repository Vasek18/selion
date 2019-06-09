@extends('layouts.app')

@section('content')
    <div class="col-12 mb-5">
        <div class="pl-3">
            <h3 class="mb-4">Сертификаты подтверждающие компетенции</h3>
            <div class="sertificates-slides"><a href="#"><img src="{{ url('/') }}/img/sertificate.jpg"></a><a
                        href="#"><img
                            src="{{ url('/') }}/img/sertificate.jpg"></a><a href="#"><img
                            src="{{ url('/') }}/img/sertificate.jpg"></a><a
                        href="#"><img src="{{ url('/') }}/img/sertificate.jpg"></a><a href="#"><img
                            src="{{ url('/') }}/img/sertificate.jpg"></a><a
                        href="#"><img src="{{ url('/') }}/img/sertificate.jpg"></a><a href="#"><img
                            src="{{ url('/') }}/img/sertificate.jpg"></a>
            </div>
        </div>
    </div>
    <div class="col-12 portfolio-content">
        <div class="row mt-3">
            <div class="col-6">
                <h5>Стажировки</h5>
                <table class="table table-border">
                    <tr>
                        <td>Название</td>
                        <td>Name #1</td>
                    </tr>
                    <tr>
                        <td>Год</td>
                        <td>Name #2</td>
                    </tr>
                    <tr>
                        <td>Часы</td>
                        <td>Name #3</td>
                    </tr>
                    <tr>
                        <td>Специализация</td>
                        <td>Name #4</td>
                    </tr>
                    <tr>
                        <td>Деятельность компании</td>
                        <td>Name #5</td>
                    </tr>
                </table>
            </div>
            <div class="col-6">
                <h5>Конкурсы</h5>
                <table class="table table-border">
                    <tr>
                        <td>Название</td>
                        <td>Name #1</td>
                    </tr>
                    <tr>
                        <td>Год</td>
                        <td>Name #2</td>
                    </tr>
                    <tr>
                        <td>Часы</td>
                        <td>Name #3</td>
                    </tr>
                    <tr>
                        <td>Специализация</td>
                        <td>Name #4</td>
                    </tr>
                    <tr>
                        <td>Деятельность компании</td>
                        <td>Name #5</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <textarea placeholder="Разработка прототипа сайтов для образовательных учреждений" rows="3"></textarea>
                <button class="portfolio-content__save-btn">Сохранить</button>
            </div>
            <div class="col-6">
                <textarea placeholder="Разработка прототипа сайтов для образовательных учреждений" rows="3"></textarea>
                <button class="portfolio-content__save-btn">Сохранить</button>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-6">
                <h5 class="mb-3">Работа | Подработка</h5>
                <table class="table table-border">
                    <tr>
                        <td>Название компании</td>
                        <td>Name #1</td>
                    </tr>
                    <tr>
                        <td>Деятельность компании</td>
                        <td>Name #2</td>
                    </tr>
                    <tr>
                        <td>Должность</td>
                        <td>Name #3</td>
                    </tr>
                    <tr>
                        <td>Год начала</td>
                        <td>Name #4</td>
                    </tr>
                    <tr>
                        <td>Год окончания</td>
                        <td>Name #5</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <h5 class="mb-3">Галлерея работ</h5>
                <div class="gallery-slides"><a href="#"><img src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a><a href="#"><img
                                src="{{ url('/') }}/img/gallery1.jpg"></a></div>
            </div>
        </div>
    </div>

@endsection