@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>index</h1>
        <div class="row gy-4">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $product->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">Vedi specifiche</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>
@endsection
