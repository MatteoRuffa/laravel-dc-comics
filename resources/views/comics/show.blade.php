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
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deleteModalLabel">Confirm deletion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Are you sure you want to delete this item?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete permanently</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
