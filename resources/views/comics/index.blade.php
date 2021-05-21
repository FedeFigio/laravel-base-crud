@extends('layouts.app')
@section('main')
    <main class="index">
        <a href="{{ route('comics.create') }}"> crea nuovo</a>

        @foreach ($comics as $comic)
            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="card">
                <img src="{{ $comic->thumb }}" alt="">
                <h4>{{ $comic->title }}</h4>
                <p>{{ $comic->description }}</p>
                <h5>Series:{{ $comic->series }} - Type:{{ $comic->type }}</h5>
                <h6>Sale Date:{{ $comic->sale_date }}</h6>
                <h6>Price: {{ $comic->price }} $</h6>
                <a href="{{ route('comics.edit', $comic->id) }}">EDIT</a>
            </a>

        @endforeach
    </main>
@endsection
