@extends('layouts.app')


@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-header">
                        <h2>New Truck</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('t_store') }}" method="POST">
                            <div class="input-group mb-3">
                                <span class="input-group-text">Maker</span>
                                <input type="text" class="form-control" name="maker" value="{{ old('maker') }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Plate</span>
                                <input type="text" class="form-control" name="plate" value="{{ old('plate') }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Make year</span>
                                <input type="text" class="form-control" name="make_year" value="{{ old('make_year') }}">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Mechanic notices</span>
                                <textarea class="form-control" name="mechanic_notices">{{ old('mechanic_notices') }}</textarea>
                            </div>
                            <select class="form-select mb-3" name="mechanic_id">
                                <option value="0">Choose mechanic for service</option>
                                @foreach ($mechanics as $mechanic)
                                <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
                                @endforeach
                            </select>
                            @csrf
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
