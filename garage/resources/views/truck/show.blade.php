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
                        <h5>{{ $truck->maker }}</h5>
                        <h5>{{ $truck->plate }}</h5>
                        <h5>{{ $truck->make_year }}</h5>
                        <h5>{{ $truck->mechanic_id }}</h5>
                        <p>{{ $truck->mechanic_notices }}</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
