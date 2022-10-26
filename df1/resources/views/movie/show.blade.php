@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Movie</h2>
                    </div>
                    <div class="card-body">
                        <div class="movie-show">
                            <div class="line"><small>Title:</small>
                                <h5>{{ $movie->title }}</h5>
                            </div>
                            <div class="line"><small>Price:</small>
                                <h5>{{ $movie->price }}</h5>
                            </div>
                            <div class="line"><small>Category:</small>
                                <h5>{{ $movie->getCategory->title }}</h5>
                            </div>
                            <div class="swiper mySwiper">
                                <div class="swiper-wrapper">
                                    @forelse($movie->getPhotos as $photo)
                                        <div class="swiper-slide" style="background-image: url({{ $photo->url }}) "></div>
                                        {{-- <img class="swiper-slide" src="{{ $photo->url }}"> --}}

                                    @empty
                                        <h2>No photos yet.</h2>
                                    @endforelse
                                </div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        document.addEventListener('readystatechange', () => {
                    if (document.readyState == 'complete')

                    function() {
                        const swiper = new Swiper('.mySwiper', {
                                pagination: '.swiper-pagination',
                                slidesPerView: 'auto',
                                paginationClickable: true,
                                spaceBetween: 0
                            },
                            false);
    </script>
@endsection
