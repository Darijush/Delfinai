@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Truck</h2>
                    </div>
                    <div class="card-body">
                        <div class="truck-card">
                            <small>Plate:</small>
                            <h5 class="plate">{{ $truck->plate }}</h5>
                            <small>Maker:</small>
                            <h5>{{ $truck->maker }}</h5>
                            <small>MY:</small>
                            <h5>{{ $truck->make_year }}</h5>
                            <small>Mechanic:</small>
                            <h5>{{ $truck->getMechanic->name }} {{ $truck->getMechanic->surname }}</h5>
                        </div>
                        <p>{{ $truck->mechanic_notices }}</p>

                        @if ($truck->photo)
                            <div class="img">
                                <img src="{{$truck->photo}}" alt="photo">
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
