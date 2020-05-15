@extends('app')

@section('title', "Adam Vets | Welcome")

@section('content')
    <h1 class="text-success text-center py-4">Welcome to Adam Vets</h1>

        <h2 class="text-center text-primary">
            {{ $greeting }}
        </h2>

@endsection