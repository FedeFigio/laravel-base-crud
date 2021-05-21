@extends('layouts.app')
@section('main')
    <main class="create">

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @method('POST')

            <input type="text" name="title" placeholder="title">
            <input type="text" name="description" placeholder="description">
            <input type="text" name="thumb" placeholder="description">
            <input type="text" name="src" placeholder="link">
            <input type="number" name="price" placeholder="price">
            <input type="text" name="series" placeholder="series">
            <input type="date" name="sale_date" placeholder="sale date">
            <input type="text" name="type" placeholder="type">
            <input type="submit" value="ENTER">
        </form>
        <a href="{{ route('comics.index') }}">HOME</a>
    </main>
@endsection
