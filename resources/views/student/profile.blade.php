<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Test List</title>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="theme-color" content="#fff">
    <meta name="format-detection" content="telephone=no">
    <!-- appstore links-->
    <!-- seo meta-->
    <meta name="description" content="Meta description">
    <meta name="keywords" content="Key, words">
    <meta name="author" content="Site name">
    <!-- og meta-->
    <meta property="og:title" content="Site name">
    <meta property="og:url" content="https://">
    <meta property="og:image" content="https://">
    <meta property="og:description" content="Site name">
    <meta name="twitter:title" content="Site name">
    <meta name="twitter:description" content="Site name">
    <meta name="twitter:image:src" content="https://">
    <meta name="twitter:url" content="https://">
    <!-- remove for production-->
    <meta name="robots" content="noindex">
    <link rel="stylesheet" media="all" href="{{ url('/css/app.css') }}">
    <link rel="styleheet" media="all" href="../bower_components/fancybox/dist/jquery.fancybox.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body class="profile">
<!-- place where pjax bindings happen's-->
<div id="barba-wrapper">
    <!-- HEADER :: START-->
    <!-- HEADER :: END-->
    <!-- what should be changed with every pjax-->
    <div class="page">
        <div class="page__content">
            <!-- BEGIN SECTION :: TESTS LIST-->
            <section class="profile-content wow">
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <ul class="profile-content__lk-menu">
                                <li><a href="{{ route('student') }}">Личный кабинет</a></li>
                                <li><a href="#">Информацию от ВУЗа</a></li>
                                <li><a href="#">Портфолио</a></li>
                                <li class="mb-5"><a href="#">Тесты</a></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Выход
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="row">
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
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">C++ (12% /
                                                100%)
                                            </div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">JavaScript
                                                (52% / 100%)
                                            </div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">PHP (97% /
                                                100%)
                                            </div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Python (26% /
                                                100%)
                                            </div>
                                        </div>
                                        <div class="progress mb-3">
                                            <div class="progress-bar" role="progressbar" style="width: 25%;"
                                                 aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">SQL (20% /
                                                100%)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <footer class="footer"></footer>
    </div>
    <script src="{{ url('/js/vendor.js') }}"></script>
    <script src="{{ url('/js/app.js') }}"></script>
</div>
</body>
</html>