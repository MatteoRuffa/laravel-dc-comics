@extends('layouts.app')

@section('title', $comic->title)

@section('content')
<main>
    <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST" class="py-5" novalidate>
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $comic->title }}" required>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description " name="description">{{ $comic->description }}</textarea>
            
        </div>

        <div class="form-group">
            <label for="thumb">Thumbnail</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}">
            
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ $comic->price }}" required>
            @error('price')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="series">Series</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{ $comic->series }}" required>
            @error('series')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="sale_date">Sale Date</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" required>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="type" name="type" value="{{ $comic->type }}">
        </div>

        <div class="d-flex justify-content-start">
            <div class="p-3">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            
            <div class="p-3">
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-secondary p-2">Torna al Comic</a>
            </div>
        </div>
        
        
    </form>


</main>
@endsection