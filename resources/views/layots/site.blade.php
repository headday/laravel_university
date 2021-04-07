<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel=stylesheet
    href="{{ asset('/assets/css/style.css') }}"
    type='text/css'>
<title>{{ $header }}</title>
</head>
<body>
    <div class="header"><!--*****************Логотип и шапка********************-->
        {{ $header  }}
        <div id="logo"></div>
        </div>  
        <div class="rightcol"><!--*******************Навигационное меню*******************-->
            <ul class="menu">
                    <li><a href="">Вакансии</a></li>
                    <li><a href="">Резюме по профессиям</a></li>
                    <li><a href="">Резюме по возрасту</a></li>
                    <li><a href="">Избранное резюме</a></li>
            </ul>
        </div>
@extends('layots.errors')
@yield('content')

<div class="footer">&copy; Copyright 2017</div>
</body>
</html>