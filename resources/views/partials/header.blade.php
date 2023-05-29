<header>
    <!-- dc power visa additional dc sites -->
    <div class="bg-primary box-visa">
        <div class="container d-flex justify-content-end align-items-center">
            <div class="text-uppercase text-white px-4">dc power visa</div>
            <div class="text-uppercase text-white px-4">additional dc sites</div>
        </div>
    </div>
    <!-- navbar -->
    <nav class="py-4">
        <div class="container d-flex justify-content-center align-items-center">
            <div class="box-logo">
                <img src="{{ asset('resources/img/dc-logo.png') }}" alt="dc-comics">
            </div>

            <ul class="d-flex">
                @if (is_array($headerLinks))
                    @foreach ($headerLinks as $link)
                        <li class="text-uppercase fw-semibold">{{ $link }}</li>
                    @endforeach
                @else
                    <li class="text-uppercase fw-semibold">Invalid header links</li>
                @endif
            </ul>
        </div>
    </nav>
</header>
<div id="hero">
    <img src=" {{ asset('resources/img/jumbotron.jpg') }} " alt="">
</div>
