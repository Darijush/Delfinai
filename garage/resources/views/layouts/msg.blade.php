
@if ($errors->any())
                <div class="container text-center">
                    <div class="row justify-content-center">
                        <div class="col-6">
                            <div class="alert alert-danger alert-dismissible fade show">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (Session::has('success_msg'))
                <div class="container text-center">
                    <div class="row justify-content-center ">
                        <div class="col-6">
                            <div class="alert alert-success alert-dismissible fade show">
                                <h2>{{ Session::get('success_msg') }}</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if (Session::has('danger_msg'))
            <div class="container text-center">
                <div class="row justify-content-center">
                    <div class="col-6">
                        <div class="alert alert-danger alert-dismissible fade show">
                            <h2>{{ Session::get('danger_msg') }}</h2>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        @if (Session::has('info_msg'))
        <div class="container text-center">
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="alert alert-info alert-dismissible fade show">
                        <h2>{{ Session::get('info_msg') }}</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
    @endif

