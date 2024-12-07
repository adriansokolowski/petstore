@extends('layout')

@section('content')
    <h2>Add New Pet</h2>
    @include('pets._form', [
        'action' => url('/pet'),
        'buttonText' => 'Add Pet',
    ])
@endsection
