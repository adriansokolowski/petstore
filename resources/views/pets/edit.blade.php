@extends('layout')

@section('content')
    <h2>Edit Pet</h2>
    @include('pets._form', [
        'action' => url('/pet/' . $pet['id']),
        'method' => 'PUT',
        'buttonText' => 'Update Pet',
        'pet' => $pet,
    ])
@endsection
