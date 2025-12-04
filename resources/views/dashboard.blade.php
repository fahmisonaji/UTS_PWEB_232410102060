@extends('layouts.app')

@section('title', 'Dashboard - GoCamp')

@section('styles')
<style>
    .welcome-banner {
        background: linear-gradient(135deg, #2d5016 0%, #4a7c2c 100%);
        color: white;
        padding: 40px;
        border-radius: 10px;
        margin-bottom: 30px;
        text-align: center;
    }

    .welcome-banner h2 {
        font-size: 32px;
        margin-bottom: 10px;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .stat-card {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        display: flex;
        align-items: center;
        gap: 20px;
        transition: transform 0.3s;
    }

    .stat-card:hover {
        transform: translateY(-5px);
    }

    .stat-icon {
        font-size: 48px;
    }

    .stat-info h3 {
        color: #666;
        font-size: 14px;
        margin-bottom: 5px;
    }

    .stat-info p {
        color: #2d5016;
        font-size: 28px;
        font-weight: bold;
    }

    .info-section {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .info-section h3 {
        color: #2d5016;
        margin-bottom: 15px;
        font-size: 22px;
    }

    .feature-list {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 15px;
        margin-top: 20px;
    }

    .feature-item {
        padding: 15px;
        background: #f8f9fa;
        border-radius: 8px;
        border-left: 4px solid #2d5016;
    }
</style>
@endsection

@section('content')
<div class="welcome-banner">
    <h2>Selamat Datang, {{ $username }}!</h2>
    <p>Kelola toko alat camping Anda dengan mudah di GoCamp</p>
</div>

<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-info">
            <h3>Total Produk</h3>
            <p>6</p>
        </div>
    </div>
    
    <div class="stat-card">
        <div class="stat-info">
            <h3>Total Pesanan</h3>
            <p>0</p>
        </div>
    </div>
    
    <div class="stat-card">
        <div class="stat-info">
            <h3>Total Pelanggan</h3>
            <p>0</p>
        </div>
    </div>
    
    <div class="stat-card">
        <div class="stat-info">
            <h3>Total Pendaapatan</h3>
            <p>Rp 0,00</p>
        </div>
    </div>
</div>

<div class="info-section">
    <h3>Tentang GoCamp</h3>
    <p style="line-height: 1.8; color: #555; margin-bottom: 20px;">
        GoCamp adalah platform jual beli alat camping terpercaya yang menyediakan berbagai perlengkapan camping berkualitas.
    </p>
    
    <div class="feature-list">
        <div class="feature-item">
            <strong>Produk Berkualitas</strong>
            <p style="font-size: 14px; color: #666; margin-top: 5px;">Semua produk telah teruji kualitasnya</p>
        </div>
        <div class="feature-item">
            <strong>Pengiriman Cepat</strong>
            <p style="font-size: 14px; color: #666; margin-top: 5px;">Gratis ongkir untuk pembelian tertentu</p>
        </div>
        <div class="feature-item">
            <strong>Pembayaran Mudah</strong>
            <p style="font-size: 14px; color: #666; margin-top: 5px;">Berbagai metode pembayaran tersedia</p>
        </div>
        <div class="feature-item">
            <strong>Transaksi Aman</strong>
            <p style="font-size: 14px; color: #666; margin-top: 5px;">Keamanan data terjamin 100%</p>
        </div>
    </div>
</div>
@endsection