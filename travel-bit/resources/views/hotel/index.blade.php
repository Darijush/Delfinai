@extends('layouts.app')

@section('content')
    <div class="container --content">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Hotels</h2>
                        <form action="{{ route('h_index') }}" method="get">
                            <div class="container">
                                <div class="row">
                                    <div class="col-7">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group mb-3">
                                                        {{-- <input type="text" name="s" class="form-control" value="{{$s}}"> --}}
                                                        <button type="submit" class="input-group-text">Search</button>
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <a href="{{ route('h_index') }}" class="btn btn-secondary">Reset</a>
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
                                                <span>Country: </span>
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
                                            <a href="{{ route('h_show', $hotel) }}" class="btn btn-info">Show</a>
                                            @if (Auth::user()->role >= 10)
                                                <a href="{{ route('h_edit', $hotel) }}" class="btn btn-success">Edit</a>
                                                <form action="{{ route('h_delete', $hotel) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No movies found</li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="me-3 mx-3">
                        {{ $hotels->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
