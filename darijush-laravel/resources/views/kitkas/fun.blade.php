@extends('home')

@section('title')
    Super Fun
@endsection

@section('fun')
@include('kitkas.bu')
@if ($abc=='keturi')
<h1>Labai gerai</h1>
@else
    <h1>Nelabai gerai</h1>
@endif
{{$abc}}

@foreach ($mas as $value)
<h2>{{$value}}</h2>
@endforeach
@endsection
