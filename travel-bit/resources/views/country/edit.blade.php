@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card">
                <div class="card-header">
                    <h2>Change Country</h2>
                </div>
                <div class="card-body">
                    <form action="{{route('c_edit', $country)}}" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text">Title</span>
                        <input type="text" name="title" class="form-control" value={{old('title', $country->title)}}>
                    </div>
                    <select name="season_id" class="form-select mt-3">
                        <option value="0">Choose season</option>
                        @foreach ($seasons as $season)
                            <option value="{{ $season->id }}" @if ($season->id == old('season_id', $country->season_id)) selected @endif>
                                {{ $season->title }}</option>
                        @endforeach
                    </select>
                    @csrf
                    @method('put')
                    <button type="submit" class="btn btn-secondary mt-4">Change</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
