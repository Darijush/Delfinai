    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        <h2>Register new breakdown</h2>
                    </div>
                    <div class="card-body">
                        <select class="form-select mb-3" name="mechanic_id">
                            <option value="0">Choose mechanic</option>
                            @foreach ($mechanics as $mechanic)
                                <option value="{{ $mechanic->id }}">
                                    {{ $mechanic->name }} {{ $mechanic->surname }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
