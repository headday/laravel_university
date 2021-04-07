@extends('layots.site')
@section('content')
@foreach ($positions as  $position)
<p class="pinline second" style="border: 1px solid
green; padding:10px">{{ $position->staff}},
@endforeach

@endsection
