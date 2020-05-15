@extends('app')

@section('title', "Adam's Veterinary Clinic | Owners")

@section('content')
    <h1 class="text-success">Owners Page</h1>

    @if (count($owners) === 0)
        <p>
            No owners found.
        </p>
    @else
        @include('_parts/owners_list')
    @endif
@endsection