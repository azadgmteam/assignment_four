@extends('layouts.app')

@section('content')
    <h1>Product Details</h1>

    <p><strong>Product ID:</strong> {{ $product->product_id }}</p>
    <p><strong>Name:</strong> {{ $product->name }}</p>
    <p><strong>Description:</strong> {{ $product->description }}</p>
    <p><strong>Price:</strong> {{ $product->price }}</p>
    <p><strong>Stock:</strong> {{ $product->stock }}</p>
    @if($product->image)
        <p><strong>Image:</strong> <img src="{{ $product->image }}" alt="{{ $product->name }}" width="100"></p>
    @endif

    <a href="{{ route('products.index') }}">Back to Products</a>
    <a href="{{ route('products.edit', $product->id) }}">Edit Product</a>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete Product</button>
    </form>
@endsection
