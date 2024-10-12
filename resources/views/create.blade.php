<!-- resources/views/products/create.blade.php -->
@extends('layout')

@section('title', 'Create Product')

@section('content')
<div class="container mt-5">
    <h1>Create a New Product</h1>

    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="product_name" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" required>
        </div>
        <div class="mb-3">
            <label for="retail_price" class="form-label">Retail Price</label>
            <input type="number" class="form-control" id="retail_price" name="retail_price" required>
        </div>
        <div class="mb-3">
            <label for="wholesale_price" class="form-label">Wholesale Price</label>
            <input type="number" class="form-control" id="wholesale_price" name="wholesale_price" required>
        </div>
        <div class="mb-3">
            <label for="quantity" class="form-label">Quantity</label>
            <input type="number" class="form-control" id="quantity" name="quantity" required>
        </div>
        <div class="mb-3">
            <label for="origin" class="form-label">Origin (2-character code)</label>
            <input type="text" class="form-control" id="origin" name="origin" maxlength="2" required>
        </div>
        <button type="submit" class="btn btn-success">Create</button>
    </form>
</div>
@endsection
