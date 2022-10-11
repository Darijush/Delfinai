@extends('layouts.app')

@section('content')
    <div class="container --content">
        <div class="row justify-content-center">
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Comments</h2>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            @forelse($movies as $movie)
                                <div class="comment-delete">
                                    <li class="list-group-item">
                                        <div>
                                            <div class="content">
                                                <h2>{{ $movie->title }}</h2>
                                                <small>[{{ $movie->getComments()->count() }}]</small>
                                            </div>
                                            <ul class="list-group">
                                                @forelse($movie->getComments as $comment)
                                                    <li class="list-group-item col-12">
                                                        <div class="content">
                                                            <div class="col-12">{{ $comment->post }}</div>
                                                            <div class="buttons">
                                                                @if (Auth::user()->role >= 10)
                                                                    <form action="{{ route('c_delete', $comment) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </li>
                                                @empty
                                                    <li class="list-group-item">
                                                        no comments.
                                                    </li>
                                                @endforelse

                                            </ul>
                                        </div>
                                    </li>
                                </div>
                            @empty
                                <li class="list-group-item">No movies found</li>
                            @endforelse
                        </ul>
                    </div>
                    <div class="me-3 mx-3">
                        {{ $movies->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
