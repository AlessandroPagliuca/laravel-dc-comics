@extends('layouts.app');

@section('content')
    <section class="container">
        <h1>Edit: {{ $comic->title }} </h1>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleComic"
                    value=" {{ $comic->title }} " required>
                <div id="titleComic" class="alert alert-danger fw-semibold alert-none">Enter title</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Edit description</label>
                <textarea name="description" id="description" cols="30" rows="10" aria-describedby="descriptionComic">
                    {{ $comic->description }}
                </textarea>
                <div id="descriptionComic" class="alert alert-danger fw-semibold alert-none">Enter description</div>

            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Edit thumb</label>
                <textarea name="thumb" id="thumb" cols="30" rows="10" aria-describedby="thumbComic">
                     {{ $comic->thumb }}
                </textarea>
                <div id="thumbComic" class="alert alert-danger fw-semibold alert-none">Enter thumb</div>

            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Edit price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceComic"
                    value=" {{ $comic->price }} " required>
                <div id="priceComic" class="alert alert-danger fw-semibold alert-none">Enter price</div>

            </div>
            <div class="mb-3">
                <label for="series" class="form-label"> Edit series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesComic"
                    value=" {{ $comic->series }} " required>
                <div id="seriesComic" class="alert alert-danger fw-semibold alert-none">Enter series</div>

            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"> Edit sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateComic"
                    value=" {{ $comic->sale_date }} " required>
                <div id="sale_dateComic" class="alert alert-danger fw-semibold alert-none">Enter sale date</div>

            </div>
            <div class="mb-3">
                <label for="type" class="form-label"> Edit type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeComic"
                    value=" {{ $comic->type }} " required>
                <div id="typeComic" class="alert alert-danger fw-semibold alert-none">Enter type</div>

            </div>

            <button type="submit" class="valid-form btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </section>
@endsection
