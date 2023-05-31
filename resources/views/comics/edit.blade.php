@extends('layouts.app');

@section('content')
    <section class="container">
        <h1>Edit: {{ $comic->title }} </h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid
                @enderror" name="title"
                    id="title" aria-describedby="titleComic" value=" {{ old('title', $comic->title) }} ">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Edit description</label>
                <textarea name="description" id="description" class="@error('description') is-invalid
                @enderror"
                    cols="30" rows="10" aria-describedby="descriptionComic">
                    {{ $comic->description }}
                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Edit thumb</label>
                <textarea name="thumb" id="thumb" class="@error('thumb') is-invalid
                @enderror" cols="30"
                    rows="10" aria-describedby="thumbComic">
                     {{ $comic->thumb }}
                </textarea>
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Edit price</label>
                <input type="text" class="form-control @error('price') is-invalid
                @enderror"
                    name="price" id="price" aria-describedby="priceComic" value=" {{ old('price', $comic->price) }} ">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label"> Edit series</label>
                <input type="text" class="form-control @error('series') is-invalid
                @enderror"
                    name="series" id="series" aria-describedby="seriesComic"
                    value=" {{ old('series', $comic->series) }} ">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"> Edit sale date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid
                @enderror"
                    name="sale_date" id="sale_date" aria-describedby="sale_dateComic"
                    value=" {{ old('sale_date', $comic->sale_date) }} ">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"> Edit type</label>
                <input type="text" class="form-control @error('type') is-invalid
                @enderror"
                    name="type" id="type" aria-describedby="typeComic" value=" {{ old('type', $comic->type) }} ">
                @error('type')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="valid-form btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </section>
@endsection
