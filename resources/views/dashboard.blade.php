@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h4>Total Quantity: {{ $totalQuantity }}</h4>
    </div>
    <div class="col-md-6">
        <h4>Produk Termahal: {{ $mostExpensiveProduct->product_name }} - Rp{{ $mostExpensiveProduct->retail_price }}</h4>
    </div>
    <div class="col-md-6">
        <h4>Produk dengan Quantity Terbanyak: {{ $productWithHighestQuantity->product_name }} - {{ $productWithHighestQuantity->quantity }} pcs</h4>
    </div>
</div>
@endsection
