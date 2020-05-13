@extends('app')

@section('title', 'Veterinary Clinic')

@section('content')
    <h1>Welcome to the Veterinary Clinic</h1>

    @foreach (App\Owner::all() AS $owner)
        <p>
            {{ $owner->fullName() }}
        </p>
    @endforeach
@endsection