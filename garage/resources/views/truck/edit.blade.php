@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Edit mechanic</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('m_edit', $mechanic) }}" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Name</span>
                                <input type="text" class="form-control" name="name"
                                    value="{{ old('title', $mechanic->name) }}">
                            </div>
                            <div class="input-group">
                                <span class="input-group-text">Surname</span>
                                <input type="text" class="form-control" name="surname"
                                    value="{{ old('title', $mechanic->surname) }}">
                            </div>
                            @csrf
                            @method('put')
                            <button type="submit" class="btn btn-primary">SAAAVE!</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
