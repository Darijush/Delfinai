@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Posts</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse ($blogs as $blog)
                                <li class="list-group-item">
                                    <div class="post-list">
                                        <div class="content">
                                            <h2>{{ $blog->title }}</h2>
                                            @foreach ($c as $l)
                                            <h3>{{$l}}</h3>

                                            @endforeach
                                        </div>
                                        <div class="buttons">
                                            <a href="{{ route('show', $blog) }}" class="btn btn-info">Show</a>
                                            <a href="{{ route('edit', $blog) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{route('delete',$blog)}}" method="POST">
                                                @method('delete')
                                                <button type="submit" class="btn btn-secondary">Delete</button>
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            @empty
                                <li class="list-group-item">no posts to show</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
