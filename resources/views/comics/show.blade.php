@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<main>
    <div class="container show">
        <div class="d-flex p-3">
            <div class="img-show p-3">
                <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
            </div>
            <div class="info p-3">
                <h1>{{ $comic->title }}</h1>
                <!-- Aggiungi qui i dettagli del fumetto -->
                <p>Description: {{ $comic->description }}</p>
                <p>Price: {{ $comic->price }}</p>
                <p>Sale date: {{ $comic->sale_date }}</p>
                <p>Type: {{ $comic->type }}</p>
                <p>Series: {{ $comic->series }}</p>
                <div class="link d-flex align-items-center justify-content-center">
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="update-link p-4">
                        <i class="fa-solid fa-gear"></i>
                    </a>
                    <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST" class="p-3 d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
