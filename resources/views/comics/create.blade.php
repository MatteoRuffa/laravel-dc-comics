@extends('layouts.app')

@section('title', 'Create Comic')

@section('content')
<main>
    <div class="container">
        <h2 class="py-5 text-white text-center ">Create New Comic</h2>
        <form action="{{ route('comics.store') }}" method="POST" class="py-5" novalidate>
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" required maxlength="255" minlength="3">Title</label>
                <input type="text" class="form-control" id="title" name="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label" name="image"  value="{{old('image')}}">image</label>
                <select class="form-control" id="thumb" name="thumb">
                    @foreach($comics as $comic)
                        <option value="{{ $comic->thumb }}">Immagine {{ $loop->iteration }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" step="0.01" class="form-control @error('price') is-invalid @enderror" id="price" name="price"  value="{{old('image')}}" required>
                @error('price')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label @error('Series') is-invalid @enderror" name="Series"  value="{{old('Series')}}" required>Series</label>
                <input type="text" class="form-control" id="series" name="series">
                @error('Series')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label @error('sale_date') is-invalid @enderror" name="sale_date"  value="{{old('sale_date')}}" required>Sale Date</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
                @error('sale_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label " name="type"  value="{{old('type')}}" required>Type</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>
            <button type="submit" class="btn btn-primary">Create Comic</button>
        </form>
    </div>
</main>
@endsection
