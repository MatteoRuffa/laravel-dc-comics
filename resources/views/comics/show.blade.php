@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>{{ $comic->title }}</h1>
                <!-- Aggiungi qui i dettagli del fumetto -->
                <p>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
</main>
@endsection
