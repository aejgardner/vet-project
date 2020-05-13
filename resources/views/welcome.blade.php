@extends('app')

@section('title', 'Veterinary Clinic | Welcome')

@section('content')
    <h1>Welcome to Adam's Veterinary Clinic</h1>

        <p>
            {{ $greeting }}
        </p>

@endsection