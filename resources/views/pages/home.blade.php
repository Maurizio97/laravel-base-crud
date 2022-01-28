@extends('layouts.main-layout')
@section('content')
    <h1>
        List Comics
    </h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <a href="#">
                    {{ $comic -> title}} (pag.{{ $comic -> pages }})
                </a>
            </li>
        @endforeach
    </ul>
@endsection