@extends('layots.site')
@section('content')

@foreach ($persons as $person)
<p class="pinline second">
{{$person->FIO}}, Телефон: {{$person-> Phone}}
<span class="pinline third"> Стаж: {{$person->Stage}} лет</span>
</p>
{{-- <form action=
"{{ route('resumeDelete',['resume'=>$person->id]) }}"
<input type=hidden name="_method" value="DELETE">
<button type="submit">Удалить</button>
{{ csrf_field() }} --}}
</form>
<a href = 'delete/{{ $person->id }}'>Delete</a>
@endforeach
@endsection
