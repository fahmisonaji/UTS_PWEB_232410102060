@extends('layouts.app')

@section('title', 'Pengelolaan Produk - GoCamp')

@section('styles')
<style>
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 30px;
    }

    .page-header h2 {
        color: #2d5016;
        font-size: 28px;
    }

    .product-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .product-card {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .product-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .product-image {
        background: linear-gradient(135deg, #4a7c2c 0%, #2d5016 100%);
        height: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 64px;
    }

    .product-body {
        padding: 20px;
    }

    .product-category {
        display: inline-block;
        background: #e8f5e9;
        color: #2d5016;
        padding: 4px 12px;
        border-radius: 15px;
        font-size: 12px;
        font-weight: 600;
        margin-bottom: 10px;
    }

    .product-name {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        margin-bottom: 8px;
    }

    .product-description {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .product-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding-top: 15px;
        border-top: 1px solid #eee;
    }

    .product-price {
        color: #2d5016;
        font-size: 20px;
        font-weight: bold;
    }

    .product-stock {
        color: #666;
        font-size: 14px;
    }

    .stock-badge {
        display: inline-block;
        padding: 4px 10px;
        border-radius: 12px;
        font-size: 12px;
        font-weight: 600;
    }

    .stock-available {
        background: #d4edda;
        color: #155724;
    }

    .stock-low {
        background: #fff3cd;
        color: #856404;
    }

    .table-container {
        background: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        margin-top: 30px;
    }

    .table-header {
        background: #2d5016;
        color: white;
        padding: 20px;
    }

    .table-header h3 {
        margin: 0;
        font-size: 20px;
    }
</style>
@endsection

@section('content')
<div class="page-header">
    <h2>Pengelolaan Produk</h2>
</div>

<div class="card" style="margin-bottom: 20px;">
    <p style="color: #666;">
        <strong>Halo, {{ $username }}!</strong><br>
        Total  <strong>{{ count($products) }} produk</strong> tersedia.
    </p>
</div>

<h3 style="color: #2d5016; margin-bottom: 15px;">Tampilan Card</h3>
<div class="product-grid">
    @foreach($products as $product)
    <div class="product-card">
        <div class="product-image">
            @if($product['category'] == 'Tenda')
                ⛺
            @elseif($product['category'] == 'Sleeping Bag')
                🛏️
            @elseif($product['category'] == 'Tas Carrier')
                🎒
            @elseif($product['category'] == 'Peralatan Masak')
                🍳
            @elseif($product['category'] == 'Penerangan')
                💡
            @else
                🏕️
            @endif
        </div>
        <div class="product-body">
            <span class="product-category">{{ $product['category'] }}</span>
            <h4 class="product-name">{{ $product['name'] }}</h4>
            <p class="product-description">{{ $product['description'] }}</p>
            <div class="product-footer">
                <div>
                    <div class="product-price">Rp {{ number_format($product['price'], 0, ',', '.') }}</div>
                    <div class="product-stock">
                        <span class="stock-badge {{ $product['stock'] > 20 ? 'stock-available' : 'stock-low' }}">
                            Stock: {{ $product['stock'] }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="table-container">
    <div class="table-header">
        <h3>Tampilan Tabel</h3>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
            <tr>
                <td>{{ $product['id'] }}</td>
                <td><strong>{{ $product['name'] }}</strong></td>
                <td>
                    <span class="product-category">{{ $product['category'] }}</span>
                </td>
                <td style="color: #2d5016; font-weight: bold;">
                    Rp {{ number_format($product['price'], 0, ',', '.') }}
                </td>
                <td>
                    <span class="stock-badge {{ $product['stock'] > 20 ? 'stock-available' : 'stock-low' }}">
                        {{ $product['stock'] }} unit
                    </span>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection