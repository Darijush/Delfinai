    <div class="container text-center" id="breakdown">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Register new breakdown</h2>
                    </div>
                    <div class="card-body">
                        <select data-create class="form-select mb-3" name="mechanic_id">
                            <option value="0">Choose mechanic</option>
                            @foreach ($mechanics as $mechanic)
                                <option value="{{ $mechanic->id }}">
                                    {{ $mechanic->name }} {{ $mechanic->surname }}</option>
                            @endforeach
                        </select>
                        <div id="trucks-list"></div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Title</span>
                                <input data-create class="form-control" name="title">
                            </div>
                            <select data-create class="form-select mb-3" name="status">
                                <option value="0">Status</option>
                                <option value="1">Created</option>
                                <option value="2">In progress</option>
                                <option value="3">Completed nicely!!!</option>
                            </select>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Notes</span>
                                <textarea data-create class="form-control" name="notes"></textarea>
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Price</span>
                                <input data-create class="form-control" name="price">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text">Discount</span>
                                <input data-create class="form-control" name="discount">
                            </div>



                        <button data-submit type="button" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
