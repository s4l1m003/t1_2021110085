<!-- resources/views/products/index.blade.php -->
@extends('layout')

@section('title', 'Products')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Products</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary mb-3">Add New Product</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Retail Price</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>${{ $product->retail_price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
