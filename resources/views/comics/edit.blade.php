@extends('layouts.app')
@section('main')
    <main class="edit">

        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" value="{{ $comic->title }}" name="title" placeholder="title">
            <input type="text" value="{{ $comic->description }}" name="description" placeholder="description">
            <input type="text" value="{{ $comic->thumb }}" name="thumb" placeholder="thumb">
            <input type="number" value="{{ $comic->price }}" name="price" placeholder="price">
            <input type="text" value="{{ $comic->series }}" name="series" placeholder="series">
            <input type="date" value="{{ $comic->sale_date }}" name="sale_date" placeholder="sale date">
            <input type="text" value="{{ $comic->type }}" name="type" placeholder="type">
            <input type="submit" value="ENTER">
        </form>
        <button onclick="scancella()">DELETE</button>
        <a href="{{ route('comics.index') }}">HOME</a>
        <div class="modal">
            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                @csrf
                @method('DELETE')
                {{-- <input type="submit" value="DELETE"> --}}
                <button>DELETE</button>
            </form>
        </div>
    </main>
    <script>
        function scancella() {
            document.querySelector('.modal').classList.add('show');
        }

    </script>
@endsection
