@extends('app')

@section('title', "Adam Vets | Create")

@section('content')
    <form class="form card" method="POST">
        @csrf
        <h2 class="card-header">Create Owner</h2>
        
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
                <input id="last_name" name="last_name" class="form-control" value="{{ old('last_name', $owner->last_name ?? "") }}"/>
            </div>
            @error('last_name')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
        
            <div class="form-group">
                <label for="telephone">Contact Number</label>
                <input id="telephone" name="telephone" class="form-control" value="{{ old('telephone', $owner->telephone ?? "") }}"/>
            </div>
            @error('telephone')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror

            <div class="form-group">
                <label for="address_1">Address Line 1</label>
                <input id="address_1" name="address_1" class="form-control" value="{{ old('address_1', $owner->address_1 ?? "") }}"/>
            </div>
            @error('address_1')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror

            <div class="form-group">
                <label for="address_2">Address Line 2</label>
                <input id="address_2" name="address_2" class="form-control" value="{{ old('address_2', $owner->address_2 ?? "") }}"/>
            </div>
            @error('address_2')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror

            <div class="form-group">
                <label for="town">Town</label>
                <input id="town" name="town" class="form-control" value="{{ old('town', $owner->town ?? "") }}"/>
            </div>
            @error('town')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror

            <div class="form-group">
                <label for="postcode">Postcode</label>
                <input id="postcode" name="postcode" class="form-control" value="{{ old('postcode', $owner->postcode ?? "") }}"/>
            </div>
            @error('postcode')
                <p class="form-control is-invalid">
                    {{ $message }}
                </p>
            @enderror
        
        </fieldset>
        
        <div class="card-footer text-right">
            <button class="btn btn-success">Create</button>
        </div>
    </form>
@endsection