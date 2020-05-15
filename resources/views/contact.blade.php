@extends('app')

@section('title', "Adam Vets | Contact")

@section('content')
    <h1 class="text-success text-center py-4">Contact Us</h1>

    <form class="form card" method="POST">
        @csrf
        
        <fieldset class="card-body">
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input id="first_name" name="first_name" class="form-control" value="{{ old('first_name', $owner->first_name ?? "") }}"/> 
            </div>
            @error('first_name')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
            
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" name="last_name" class="form-control" value="{{ old('last_name') }}"/>
            </div>
            @error('last_name')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
        
            <div class="form-group">
                <label for="telephone">Contact Number</label>
                <input id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}"/>
            </div>
            @error('telephone')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror

            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control" rows="5">{{ old('message') }}</textarea>
            </div>
            @error('message')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
        
        <button class="btn btn-primary">Send Message</button>
    </form>
@endsection