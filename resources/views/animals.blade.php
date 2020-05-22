@extends('app')

@section('title', "Adam Vets  | Animals")

@section('content')
    <h1 class="text-success text-center py-4">Animals Hub</h1>

    @if (count($animals) === 0)
        <p>
            No animals found.
        </p>
    @else
        @include('_parts/animals_list')
    @endif
@endsection