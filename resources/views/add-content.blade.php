@extends('layots.site')
@section('content') 
    <form method="POST" action="{{route('resumeStore')}}">
        <p>ФИО <input name="FIO" value="Мистер Х">
        <p>Телефон <input name="Phone" value="00-00-00">
        <p>Фото <input name="Image" value="ava1.jpg">
        <p>Профессия <input name="Staff" type="number" value="2">
        <p>Стаж <input name="Stage" type="number">
        <p><button type="submit">Добавить резюме</button>
            {{ csrf_field() }}
    </form>
@endsection
