@extends('layouts.app')

@section('content')
    <div class="container text-center --content">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="card">
                    <div class="card-header">
                        <h2>Trucks</h2>
                        <form action="{{ route('t_index') }}" method="get">
                            <div class="container">
                                <div class="row">
                                    <div class="col-5">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-6">
                                                    <select name="mech" class="form-select mt-1">
                                                        <option value="0">All</option>
                                                        @foreach ($mechanics as $mechanic)
                                                            <option value="{{ $mechanic->id }}"
                                                                @if ($mechanic->id == $mech) selected @endif>
                                                                {{ $mechanic->name }}
                                                                {{ $mechanic->surname }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-6">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-8">
                                                    <div class="input-group mb-3">
                                                        <input type="text" class="form-control" name="s"
                                                        value="{{ old('s') }}">
                                                        <button type="submit" class="input-group-text">Search</button>
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <a href="{{ route('t_index') }}" class="btn btn-secondary m-1">Reset</a>
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
                            @forelse ($trucks as $truck)
                                <li class="list-group-item">
                                    <div class="trucks-list">
                                        <div class="content">
                                            <h2> Plate: {{ $truck->plate }}</h2>
                                            <h4> Maker: {{ $truck->maker }}</h4>
                                            <h4> MY: {{ $truck->make_year }}</h4>
                                            <h4> Mechanic: <a href="{{ route('m_show', $truck->getMechanic->id) }}">
                                                    {{ $truck->getMechanic->name }} {{ $truck->getMechanic->surname }}
                                                </a>
                                            </h4>
                                            @if ($truck->photo)
                                                <h4><a href="{{ $truck->photo }}" target="_BLANK">Photo</a></h4>
                                            @endif
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('t_show', $truck) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('t_edit', $truck) }}" class="btn btn-secondary">Edit</a>
                                            <form action="{{ route('t_delete', $truck) }}" method="POST">
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
