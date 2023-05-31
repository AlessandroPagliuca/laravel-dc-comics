@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Insert new comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control @error('title') is-invalid
                @enderror" name="title"
                    id="title" aria-describedby="titleComic" value=" {{ old('title') }} ">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="@error('description') is-invalid
                @enderror"
                    cols="30" rows="10" aria-describedby="descriptionComic">

                </textarea>
                @error('description')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumb</label>
                <textarea name="thumb" id="thumb" class="@error('thumb') is-invalid
                @enderror" cols="30"
                    rows="10" aria-describedby="thumbComic">

                </textarea>
                @error('thumb')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control @error('price') is-invalid
                @enderror"
                    name="price" id="price" aria-describedby="priceComic" value=" {{ old('price') }} ">
                @error('price')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label"> Series</label>
                <input type="text" class="form-control @error('series') is-invalid
                @enderror"
                    name="series" id="series" aria-describedby="seriesComic" value=" {{ old('series') }} ">
                @error('series')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"> Sale date</label>
                <input type="date" class="form-control @error('sale_date') is-invalid
                @enderror"
                    name="sale_date" id="sale_date" aria-describedby="sale_dateComic" value=" {{ old('sale_date') }} ">
                @error('sale_date')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"> Type</label>
                <input type="text" class="form-control @error('type') is-invalid
                @enderror"
                    name="type" id="type" aria-describedby="typeComic" value=" {{ old('type') }} ">
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
