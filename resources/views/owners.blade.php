@extends('app')

@section('title', 'Veterinary Clinic | Owners')

@section('content')
    <h1>Owners Page</h1>

    @if (count($owners) === 0)
        <p>
            No owners found.
        </p>
    @else
        @foreach ($owners AS $owner)
            <p>
                {{ $owner->fullName() }}
            </p>
        @endforeach
    @endif
@endsection