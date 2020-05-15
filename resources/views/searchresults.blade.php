@extends('app')

@section('title', "Adam Vets | Results")

@section('content')
    <h1 class="text-success text-center py-4">Search Results</h1>

    @if (count($owners) === 0)
        <p>
            No owners found.
        </p>
    @else
        @include('_parts/owners_list')
    @endif
@endsection