<form action="{{ $action }}" method="POST">
    @csrf
    @if ($method ?? false)
        @method($method)
    @endif

    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $pet['name'] ?? '' }}" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
            @foreach(config('petstore.statuses') as $status)
                <option value="{{ $status }}" {{ (isset($pet) && $pet['status'] === $status) ? 'selected' : '' }}>
                    {{ ucfirst($status) }}
                </option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-success">{{ $buttonText }}</button>
</form>
