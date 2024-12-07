@extends('layout')

@section('content')
    <h2>{{ $pet['name'] }}</h2>
    <p><strong>Status:</strong> {{ ucfirst($pet['status']) }}</p>
    <a href="{{ url('/') }}" class="btn btn-secondary">Back to list</a>
@endsection
