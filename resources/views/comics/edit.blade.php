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
                <div id="titleComic" class="form-text">Edit title</div>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Edit description</label>
                <textarea name="description" id="description" cols="30" rows="10">
                    {{ $comic->description }}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Edit thumb</label>
                <textarea name="thumb" id="thumb" cols="30" rows="10">
                     {{ $comic->thumb }}
                </textarea>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Edit price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceComic"
                    value=" {{ $comic->price }} " required>
                <div id="priceComic" class="form-text">Edit price</div>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label"> Edit series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesComic"
                    value=" {{ $comic->series }} " required>
                <div id="seriesComic" class="form-text">Edit series</div>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"> Edit sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateComic"
                    value=" {{ $comic->sale_date }} " required>
                <!--prova conversione data da str in date {{-- $comic->sale_date_db --}}-->
                <div id="sale_dateComic" class="form-text">Edit saledate</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"> Edit type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeComic"
                    value=" {{ $comic->type }} " required>
                <div id="typeComic" class="form-text">Edit type</div>
            </div>

            <button type="submit" class="valid-form btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </section>
@endsection
