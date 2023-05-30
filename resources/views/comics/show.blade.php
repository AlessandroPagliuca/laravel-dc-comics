@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title"> {{ $comic->title }}</h5>
                </div>
                <a href="{{ route('comics.edit', $comic->id) }}"
                    class="btn btn-primary text-uppercase fw-semibold text-center m-3">Edit
                </a>
            </div>
            <a href="{{ route('comics.index') }}" class="btn btn-primary text-uppercase fw-semibold text-center m-3">Go back
            </a>

        </div>
    </section>
@endsection
