@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Country</h2>
                    </div>
                    <div class="card-body">
                        <div class="categories">
                            <h5>{{ $country->title }}</h5>

                        </div>
                        <ul class="list-group">
                            @forelse($country->hasHotels as $hotel)
                                <li class="list-group-item">
                                    <div class="movies-list">
                                        <div class="content">
                                            <h2><span>Title: </span>{{ $hotel->title }}</h2>
                                            <h4><span>Price: </span>{{ $hotel->price }}</h4>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No hotels found</li>
                            @endforelse
                        </ul>
                        @if (Auth::user()->role >=10)
                        <div class="buttons mt-2">
                            <form action="{{route('c_delete_hotels', $country)}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Delete all movies</button>
                            </form>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
