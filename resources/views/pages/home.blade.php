@extends('layouts.main-layout')
@section('content')
    <h1>
        List Comics
    </h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                {{ $comic -> title}} (pag.{{ $comic -> pages }})
            </li>
        @endforeach
    </ul>
@endsection