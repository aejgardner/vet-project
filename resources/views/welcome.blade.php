@extends('app')

@section('title', 'Veterinary Clinic | Welcome')

@section('content')
    <h1>Welcome to the Veterinary Clinic</h1>

        <p>
            {{ $greeting }}
        </p>

@endsection