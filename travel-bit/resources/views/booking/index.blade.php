@extends('layouts.app')

@section('content')
    <div class="container --content">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Bookings</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse($bookings as $booking)
                                <li class="list-group-item">
                                    <div class="categories-list">
                                        <div class="content">
                                            <h2><span>User: </span>{{ $booking->getUser->name }}</h2>
                                            <h4><span>Hotel: </span>{{ $booking->getHotel->title }}</h4>
                                            <h4><span>Price: </span>{{ $booking->getHotel->price }}</h4>
                                            <h4><span>Days: </span>{{ $booking->getHotel->term }}</h4>
                                            <h4><span>Status: </span>{{ $booking->checkStatus($booking->confirmation) }}
                                            </h4>
                                        </div>
                                        <div class="buttons">
                                            @if (Auth::user()->role >= 10)
                                                @if ($booking->confirmation == 0)
                                                    <form action="{{ route('b_edit', $booking) }}" method="post">
                                                        {{-- <input type="text" class="d-none form-check-input"
                                                            name="confirmation" value="1"> --}}
                                                        @csrf
                                                        @method('put')
                                                        <button type="submit" class="btn btn-success" name="confirmation"
                                                            value="1">Confirm</button>
                                                        <button type="submit" class="btn btn-danger"name="confirmation"
                                                            value="2">Cancel</button>
                                                    </form>
                                                @endif
                                            @endif
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No categories found</li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="me-3 mx-3">
                        {{-- {{ $seasons->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
