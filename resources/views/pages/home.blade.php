@extends('layouts.main-layout')
@section('content')
<section>
    <h1>
        List Comics
    </h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{ $comic -> id }}-
                <a href=" {{route('show', $comic -> id)}}">
                    {{ $comic -> title}} (pag.{{ $comic -> pages }})
                </a>
            </li>
        @endforeach
    </ul>
</section>
@endsection