@extends('app')

@section('title', "Adam's Veterinary Clinic | Contact")

@section('content')
    <h1 class="text-success">Contact Us</h1>

    <form action="">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name">
        
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name">

        <label for="telephone">Contact Number</label>
        <input type="number" id="telephone">

        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>

        <button>Send Message</button>
    </form>
@endsection