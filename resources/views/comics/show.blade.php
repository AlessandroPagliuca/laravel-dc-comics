@extends('layouts.app')

@section('content')
    <h1>show</h1>
    <section class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                <div class="card-body">
                    <h5 class="card-title"> {{ $comic->title }}</h5>
                </div>
            </div>
        </div>
    </section>
@endsection
