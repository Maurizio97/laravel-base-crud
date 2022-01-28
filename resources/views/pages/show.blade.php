@extends('layouts.main-layout')
@section('content')
    <h1>
        Title: {{ $comic -> title }}
    </h1>
    <div>
        <span>
            Date of release: {{ $comic -> release_date }}
        </span>
        <br>
        <span>
            Author: {{ $comic -> author }}
        </span>
    </div>
@endsection