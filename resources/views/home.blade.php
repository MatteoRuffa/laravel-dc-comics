@extends('layouts.app')

@section('title', 'Home')

@section('content')
<main>
<div class="jumbotron"></div>
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($imgcomics as $key => $imgcomic)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <img src="{{ $imgcomic['thumb'] }}" class="d-block w-100" alt="{{ $imgcomic['series'] }}">
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    
   
    
    
</main>
@endsection
