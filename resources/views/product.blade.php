@extends('layouts.app')

@section('title', 'Product | MyStore')

@section('content')
  <div class="container">
    
    <div class="product-image">
      <img src="https://via.placeholder.com/400" alt="Product Image">
    </div>

    <div class="product-details">
      <h2>Premium Headphones</h2>
      <p class="price">₦45,000</p>

      <p class="description">
        Experience high-quality sound with our premium headphones. 
        Designed for comfort and long listening sessions, perfect for music lovers.
      </p>

      <button class="btn">Add to Cart</button>
    </div>

  </div>
@endsection