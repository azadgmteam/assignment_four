@extends('layouts.app')

@section('content')
    <h1>Products</h1>

    <!-- Search form -->
    <form method="GET" action="{{ route('products.index') }}">
        <input type="text" name="search" placeholder="Search by Product ID or Description" value="{{ request('search') }}">
        <button type="submit">Search</button>
    </form>

    <!-- Sort Links -->
    <p>
        Sort by:
        <a href="{{ route('products.index', array_merge(request()->all(), ['sort' => 'name', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc'])) }}">
            Name
        </a> |
        <a href="{{ route('products.index', array_merge(request()->all(), ['sort' => 'price', 'direction' => request('direction') === 'asc' ? 'desc' : 'asc'])) }}">
            Price
        </a>
    </p>

    <!-- Product Table -->
    <table>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('products.show', $product->id) }}">View</a>
                    <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <!-- Pagination Links -->
    {{ $products->appends(request()->query())->links() }}
@endsection
