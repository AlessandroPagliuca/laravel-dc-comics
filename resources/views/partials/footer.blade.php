<footer class="bg-dark">
    <div class="container d-flex text-white">
        <div class="w-50 py-5">
            <div class="row justify-content-start">
                @if (is_array($headerLinks))
                    @foreach ($footerLinks as $key => $value)
                        <div class="col-6 col-sm-4 ">
                            <h5 class=text-uppercase>{{ $value['title'] }}</h5>
                            <ul>
                                @if (is_array($footerLinks))
                                    @foreach ($value['links'] as $link)
                                        <li class="text-secondary text-capitalize">{{ $link }}</li>
                                    @endforeach
                                @else
                                    <li class="text-uppercase fw-semibold">Invalid footer links</li>
                                @endif
                            </ul>
                        </div>
                    @endforeach
                @else
                    <li class="text-uppercase fw-semibold">Invalid footer links</li>
                @endif
            </div>
        </div>

        <div class="w-50">
            <div class="box-img">
                <img src=" {{ asset('resources/img/dc-logo-bg.png') }} " alt="">
            </div>

        </div>


    </div>



</footer>
