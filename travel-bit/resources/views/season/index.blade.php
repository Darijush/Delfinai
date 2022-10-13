@extends('layouts.app')

@section('content')
<div class="container --content">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Seasons</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($seasons as $season)
                        <li class="list-group-item">
                            <div class="categories-list">
                                <div class="content">
                                    <h2>{{$season->title}}</h2>
                                    {{-- <small>{{{$season->hasMovies()->count()}}}</small> --}}
                                </div>
                                <div class="buttons">
                                    <a href="{{route('s_show', $season)}}" class="btn btn-info">Show</a>
                                    @if (Auth::user()->role >=10)
                                    <a href="{{route('s_edit', $season)}}" class="btn btn-success">Edit</a>
                                    <form action="{{route('s_delete', $season)}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No categories found</li>
                        @endforelse
                    </ul>
                </div>
                <div class="me-3 mx-3">
                    {{-- {{ $seasons->links() }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
