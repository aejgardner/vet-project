@extends('app')

@section('title', "Adam Vets | Owner")

@section('content')
    <h1 class="text-success text-center py-4">Singular Owner Page</h1>
    <div class="text-center">
        <p>
            {{ $owner->fullName() }}
        </p>
        <p>
            {{ $owner->fullAddress() }}
        </p>
        <p>
            {{ $owner->formattedPhoneNumber() }}
        </p>
    </div>

    <form class="form card" method="POST">
        @csrf
        <h2 class="card-header">Add Animal</h2>
        
        <fieldset class="card-body">

            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" name="name" class="form-control" value="{{ old('name') }}"/> 
            </div>
            @error('name')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
            
            <div class="form-group">
                <label for="type">Type</label>
                <input id="type" name="type" class="form-control" value="{{ old('type') }}"/>
            </div>
            @error('type')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
        
            <div class="form-group">
                <label for="weight">Weight</label>
                <input type="number" step=".01" id="weight" name="weight" class="form-control" value="{{ old('weight') }}"/>
            </div>
            @error('weight')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror

            <div class="form-group">
                <label for="height">Height</label>
                <input type="number" id="height" name="height" class="form-control" value="{{ old('height') }}"/>
            </div>
            @error('height')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror

            <div class="form-group">
                <label for="biteyness">Biteyness</label>
                <input type="number" min="0" max="5" id="biteyness" name="biteyness" class="form-control" value="{{ old('biteyness') }}"/>
            </div>
            @error('biteyness')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
        
        </fieldset>
        
        <div class="card-footer text-right">
            <button class="btn btn-success">Add Animal</button>
        </div>
    </form>
@endsection