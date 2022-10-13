@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Hotel</h2>
                    </div>
                    <div class="card-body">
                        <div class="hotel-show">
                            <div class="line"><small>Title:</small>
                                <h5>{{ $hotel->title }}</h5>
                            </div>
                            <div class="line"><small>Price:</small>
                                <h5>{{ $hotel->price }}</h5>
                            </div>
                            <div class="line"><small>Country:</small>
                                <h5>{{ $hotel->getCountry->title }}</h5>
                            </div>
                            <div class="swiper">

                                <div class="swiper-wrapper">
                                    @forelse($hotel->getPhotos as $photo)
                                        <div class="swiper-slide">

                                            <img src="{{ $photo->url }}">

                                        </div>
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
@endsection
