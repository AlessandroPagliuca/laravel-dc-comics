@extends('layouts.app')

@section('content')
    <div class="bg-dark">
        <div class="container d-flex justify-content-center">
            <a href="{{ route('comics.index') }}" class="btn btn-primary w-50 my-4 text-uppercase fw-semibold text-center"
                style="height: 200px;">Choose comics</a>

        </div>
        <div class="w-100 d-flex justify-content-center py-3">
            <button class="btn btn-primary text-uppercase text-white fs-6">load more</button>
        </div>
    </div>
    <div class="w-100 bg-primary">
        <div class="container py-3">
            <div class="row justify-content-center">
                <div class="col-4 col-md-3 col-lg-auto d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-digital-comics.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">digital comics</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-merchandise.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">dc merchandise</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-subscriptions.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">subscriptions</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-comics-shop-locator.png') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">comic shop locator</div>
                </div>

                <div class="col-4 col-md-3 col-lg-auto  d-flex justify-content-center align-items-center">
                    <div class="buy-logo">
                        <img src="{{ asset('resources/img/buy-dc-power-visa.svg') }}" alt="">
                    </div>
                    <div class="text-uppercase text-white fs-6">dc power visa</div>
                </div>

            </div>
        </div>
    </div>
@endsection
