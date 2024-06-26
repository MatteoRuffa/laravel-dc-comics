@extends('layouts.app')

@section('title', 'Comics')

@section('content')
<main>
    <div class="jumbotron"></div>
    <div class="container">
        <h3 class="title">current series</h3>
        <div class="row">
            @foreach($comics as $comic)
                <div class="col-12 col-md-4 col-lg-2">
                    <div class="image g-5" 
                         onmouseover="this.querySelector('.price').style.display='flex'" 
                         onmouseout="this.querySelector('.price').style.display='none'">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <div class="price ">
                            <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="details-link p-3">
                                <i class="fas fa-info-circle"></i>
                            </a>
                            <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="update-link p-3">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </div>
                        
                    </div>
                    <h5>{{ $comic['series'] }}</h5>
                </div>
            @endforeach
        </div>
        <div class="btn-load-more text-center"><a href="{{ route('comics.create') }}">Add a comic</a></div>
    </div>
</main>
@endsection