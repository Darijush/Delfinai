@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Trucks</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse ($trucks as $truck)
                                <li class="list-group-item">
                                    <div class="mechanic-list">
                                        <div class="content">
                                            <h2>{{ $truck->maker }}</h2>
                                            <h2>{{ $truck->plate }}</h2>
                                            <h2>{{ $truck->make_year }}</h2>
                                            <h2>{{ $truck->mechanic_id }}</h2>

                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('t_show', $truck) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('t_edit', $truck) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{route('t_delete',$truck)}}" method="POST">
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                                @csrf
                                            </form>
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
