@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Insert new comic</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleComic" required>
                <div id="titleComic" class="alert alert-danger fw-semibold">Enter title</div>

            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Enter description</label>
                <textarea name="description" id="description" cols="30" rows="10" aria-describedby="descriptionComic">
                </textarea>
                <div id="descriptionComic" class="alert alert-danger fw-semibold">Enter description</div>

            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Enter thumb</label>
                <textarea name="thumb" id="thumb" cols="30" rows="10" aria-describedby="thumbComic">
                </textarea>
                <div id="thumbComic" class="alert alert-danger fw-semibold">Enter thumb</div>

            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Enter price</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="priceComic"
                    required>
                <div id="priceComic" class="alert alert-danger fw-semibold">Enter price</div>

            </div>
            <div class="mb-3">
                <label for="series" class="form-label"> Enter series</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="seriesComic"
                    required>
                <div id="seriesComic" class="form-text">Enter series</div>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label"> Enter sale date</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" aria-describedby="sale_dateComic"
                    required>
                <div id="sale_dateComic" class="alert alert-danger fw-semibold">Enter sale date</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label"> Enter type</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="typeComic"
                    required>
                <div id="typeComic" class="alert alert-danger fw-semibold">Enter type</div>
            </div>

            <button type="submit" class="valid-form btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </form>
    </section>
@endsection
