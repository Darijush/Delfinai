@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row ">
            <div class="col-12">
                @include('breakdown.create')
            </div>
            <div class="col-7">
                list
            </div>
        </div>
    </div>
@endsection
