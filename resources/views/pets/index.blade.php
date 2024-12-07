@extends('layout')

@section('content')
    <a href="{{ url('/pet/create') }}" class="btn btn-primary mb-3">Add New Pet</a>
    <ul class="list-group">
        @foreach ($pets as $pet)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <div>
                    <strong>{{ $pet['name'] }}</strong> ({{ ucfirst($pet['status']) }})
                </div>
                <div>
                    <a href="{{ url('/pet/' . $pet['id']) }}" class="btn btn-sm btn-info">Details</a>
                    <a href="{{ url('/pet/' . $pet['id'] . '/edit') }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ url('/pet/' . $pet['id']) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>
@endsection