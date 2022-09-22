<div class="container ">
    <div class="row ">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h2>BreakDowns</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse ($breakdowns as $breakdown)
                            <li class="list-group-item">
                                <div class="truck-list">
                                    <div class="content-1">
                                        <h2>  {{ $breakdown->title }}</h2>
                                        <h5> Status: {{ $breakdown->status }}</h5>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="list-group-item">No breakdowns found</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>
