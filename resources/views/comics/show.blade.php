@extends('layouts.app')
@section('main')
    <main class="show">
        <img src="{{ $comic->thumb }}" alt="">
        <h4>{{ $comic->title }}</h4>
        <p>{{ $comic->description }}</p>
        <h5>Series:{{ $comic->series }} - Type:{{ $comic->type }}</h5>
        <h6>Sale Date:{{ $comic->sale_date }}</h6>
        <h6>Price: {{ $comic->price }} $</h6>
        <a href="{{route('comics.index')}}">HOME</a>
        <a href="{{route('comics.edit',['comic' => $comic->id])}}">EDIT</a>
    </main>
@endsection
