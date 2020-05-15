@extends('app')

@section('title', "Adam's Veterinary Clinic | Welcome")

@section('content')
    <h1 class="text-success text-center">Welcome to Adam's Veterinary Clinic</h1>

        <h2 class="text-center text-primary">
            {{ $greeting }}
        </h2>

@endsection