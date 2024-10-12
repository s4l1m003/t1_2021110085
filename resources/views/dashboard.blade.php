<!-- resources/views/dashboard.blade.php -->
@extends('layout')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Total Quantity of Products</h5>
                <p>{{ $totalQuantity }}</p>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Most Expensive Product</h5>
                @if($mostExpensiveProduct)
                    <p>Name: {{ $mostExpensiveProduct->product_name }}</p>
                    <p>Price: ${{ $mostExpensiveProduct->retail_price }}</p>
                @else
                    <p>No products available</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5>Product with Highest Quantity</h5>
                @if($highestQuantityProduct)
                    <p>Name: {{ $highestQuantityProduct->product_name }}</p>
                    <p>Quantity: {{ $highestQuantityProduct->quantity }}</p>
                @else
                    <p>No products available</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
