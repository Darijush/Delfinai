@extends('layouts.app')

@section('content')
    <div class="container --content">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Movie</h2>
                        <form action="{{ route('home') }}" method="get">
                            <div class="container">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-5">
                                                    <select name="cat" class="form-select mt-1">
                                                        <option value="0">All</option>
                                                        @foreach ($countries as $country)
                                                            <option value="{{ $country->id }}"
                                                                @if ($cat == $country->id) selected @endif>
                                                                {{ $country->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-5">
                                                    <select name="sort" class="form-select mt-1">
                                                        <option value="0">All</option>
                                                        @foreach ($sortSelect as $option)
                                                            <option value="{{ $option[0] }}"
                                                                @if ($sort == $option[0]) selected @endif>
                                                                {{ $option[1] }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-2 mt-1">
                                                    <button type="submit" class="input-group-text">Sort</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        </form>
                        <form action="{{ route('home') }}" method="get">
                            <div class="col-9 mt-3">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="input-group mb-3">
                                                <input type="text" name="s" class="form-control"
                                                    value="{{ $s }}">
                                                <button type="submit" class="input-group-text">Search</button>
                                            </div>
                                        </div>
                                        <div class="col-2 ml-5">
                                            <a href="{{ route('home') }}" class="btn btn-secondary">Reset</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                </form>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @forelse($hotels as $hotel)
                        <li class="list-group-item">
                            <div class="movies-list">
                                <div class="content">
                                    <h2><span>Title: </span>{{ $hotel->title }}</h2>
                                    <h4><span>Price: </span>{{ $hotel->price }}</h4>
                                    <h4><span>Days: </span>{{ $hotel->term }}</h4>
                                    <h5>
                                        <span>country: </span>
                                        <a href="{{ route('c_show', $hotel->getCountry->id) }}">
                                            {{ $hotel->getCountry->title }}
                                        </a>
                                    </h5>
                                    @if ($hotel->getPhotos()->count())
                                        <h5><a href="{{ $hotel->lastImageUrl() }}" target="_BLANK">Photos:
                                                {{ $hotel->getPhotos()->count() }}</a></h5>
                                    @endif
                                </div>

                                <div class="buttons">
                                    <form action="{{ route('book', $hotel) }}" method="post">
                                        @csrf
                                        @method('put')
                                        <button type="submit" class="btn btn-info">Book</button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="list-group-item">No movies found</li>
                    @endforelse
                    <div class="me-3 mx-3 mt-3">
                        {{ $hotels->links() }}
                    </div>
                </ul>
            </div>
        </div>
    </div>
@endsection
