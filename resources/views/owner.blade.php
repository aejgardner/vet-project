@extends('app')

@section('title', 'Veterinary Clinic | Owner')

@section('content')
    <h1>Owner Page</h1>

    <p>
        {{ $owner->fullName() }}
    </p>

    
@endsection