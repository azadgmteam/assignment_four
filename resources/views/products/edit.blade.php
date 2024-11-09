@extends('layouts.app')

@section('content')
    <h1>Edit Product</h1>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Product ID:</label>
        <input type="text" name="product_id" value="{{ $product->product_id }}" required>
        
        <label>Name:</label>
        <input type="text" name="name" value="{{ $product->name }}" required>
        
        <label>Description:</label>
        <textarea name="description">{{ $product->description }}</textarea>
        
        <label>Price:</label>
        <input type="number" name="price" value="{{ $product->price }}" step="0.01" required>
        
        <label>Stock:</label>
        <input type="number" name="stock" value="{{ $product->stock }}">
        
        <label>Image URL:</label>
        <input type="text" name="image" value="{{ $product->image }}">

        <button type="submit">Update Product</button>
    </form>
@endsection
