@extends('layots.site')
@section('content')
@foreach ($persons as  $person)
    <p class="pinline second" style="border: 1px solid
    green; padding:10px">{{$person->FIO}},
    Профессия: {{$person->staff}}
    <span class="pinline third">
    Стаж: {{$person->Stage}} лет</span></p>
@endforeach
@endsection
