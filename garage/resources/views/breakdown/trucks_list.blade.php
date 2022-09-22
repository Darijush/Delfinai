<select class="form-select mb-3" name="truck_id">
    @foreach ($trucks as $truck)
        <option value="{{ $truck->id }}">
            {{ $truck->plate }} {{ $truck->maker }}</option>
    @endforeach
</select>
