@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card">
                <div class="card-header">
                    <h2>Category</h2>
                </div>
                <div class="card-body">
                    <div class="categories">
                        <h5>{{$category->title}}</h5>

                    </div>
                    {{-- <ul class="list-group">
                        @forelse($category->getTrucks as $category)
                        <li class="list-group-item">
                            <div class="trucks-list">
                                <div class="content">
                                    <h2><span>Title: </span>{{$category->title}}</h2>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">No categories found</li>
                        @endforelse
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
