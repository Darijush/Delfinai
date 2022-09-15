@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Mechanic</h2>
                    </div>
                    <div class="card-body">
                        <div class="mechanic">
                            <h5>{{ $mechanic->name }}</h5>
                            <h5>{{ $mechanic->surname }}</h5>
                        </div>
                        <ul class="list-group">
                            @forelse ($mechanic->getTrucks as $truck)
                                <li class="list-group-item">
                                    <div class="truck-list">
                                        <div class="content-1">
                                            <h5> Plate: {{ $truck->plate }}</h5>
                                            <p> Maker: {{ $truck->maker }}</p>
                                            <p> MY: {{ $truck->make_year }}</p>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">No trucks found</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
