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
                    <div class="image" 
                         onmouseover="this.querySelector('.price').style.display='block'" 
                         onmouseout="this.querySelector('.price').style.display='none'">
                        <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                        <span class="price">{{ $comic['price'] }}</span>
                    </div>
                    <h5>{{ $comic['series'] }}</h5>
                </div>
            @endforeach
        </div>
        <div class="btn-load-more text-center"><a href="#">load more</a></div>
    </div>
</main>
@endsection