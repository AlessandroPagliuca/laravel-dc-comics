@extends('layouts.app')

@section('content')
    <section class="container py-3">
        <a href="{{ route('home') }}" class="btn btn-primary w-25 mx-2 my-4 text-uppercase fw-semibold text-center">Go
            Home</a>

        <div class="row gy-4">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $comic->title }}</h5>
                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">See specifications</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


    </section>
@endsection
