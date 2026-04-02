@extends('layouts.app')

@section('title', 'About | MyStore')

@section('content')
    <div class="container">

        <h1>About Us</h1>
        <p>This is the about page.</p>

        <div class="about-section">
            <h2>Name: {{ $name }}</h2>
            <p>Email: {{ $email }}</p>
        </div>
    </div>
@endsection
