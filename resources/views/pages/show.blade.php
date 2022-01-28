@extends('layouts.main-layout')
@section('content')
<section>
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
</section>
@endsection