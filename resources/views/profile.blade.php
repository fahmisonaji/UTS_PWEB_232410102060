@extends('layouts.app')

@section('title', 'Profile - GoCamp')

@section('styles')
<style>
    .profile-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .profile-header {
        background: linear-gradient(135deg, #2d5016 0%, #4a7c2c 100%);
        color: white;
        padding: 40px;
        border-radius: 10px;
        text-align: center;
        margin-bottom: 30px;
    }

    .profile-name {
        font-size: 32px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .profile-role {
        font-size: 16px;
        opacity: 0.9;
    }

    .info-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        margin-bottom: 30px;
    }

    .info-card {
        background: white;
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }

    .info-card h3 {
        color: #2d5016;
        font-size: 18px;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .info-item {
        display: flex;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #f0f0f0;
    }

    .info-item:last-child {
        border-bottom: none;
    }

    .info-label {
        color: #666;
        font-weight: 600;
    }

    .info-value {
        color: #333;
    }

    .action-buttons {
        display: flex;
        gap: 10px;
        margin-top: 20px;
    }

    .btn-full {
        flex: 1;
    }
</style>
@endsection

@section('content')
<div class="profile-container">
    <div class="profile-header">
        <h1 class="profile-name">{{ $username }}</h1>
        <p class="profile-role">Administrator GoCamp</p>
    </div>

    <div class="info-grid">
        <div class="info-card">
            <h3>Informasi Akun</h3>
            <div class="info-item">
                <span class="info-label">Username</span>
                <span class="info-value">{{ $username }}</span>
            </div>
            <div class="info-item">
                <span class="info-label">Email</span>
                <span class="info-value">{{ strtolower($username) }}@gocamp.com</span>
            </div>
            <div class="info-item">
                <span class="info-label">Role</span>
                <span class="info-value">Administrator</span>
            </div>
            <div class="info-item">
                <span class="info-label">Status</span>
                <span class="info-value" style="color: #28a745; font-weight: bold;">● Aktif</span>
            </div>
        </div>

        <div class="info-card">
            <h3>Informasi Toko</h3>
            <div class="info-item">
                <span class="info-label">Nama Toko</span>
                <span class="info-value">GoCamp</span>
            </div>
            <div class="info-item">
                <span class="info-label">Lokasi</span>
                <span class="info-value">Jember</span>
            </div>
            <div class="info-item">
                <span class="info-label">Bergabung</span>
                <span class="info-value">2025</span>
            </div>
            <div class="info-item">
                <span class="info-label">Rating</span>
                <span class="info-value">(5.0/5.0)</span>
            </div>
        </div>
    </div>

    <div class="info-card">
        <h3>Statistik Penjualan</h3>
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(150px, 1fr)); gap: 20px; margin-top: 15px;">
            <div style="text-align: center; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                <div style="font-size: 28px; color: #2d5016; font-weight: bold;">6</div>
                <div style="color: #666; font-size: 14px;">Total Produk</div>
            </div>
            <div style="text-align: center; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                <div style="font-size: 28px; color: #2d5016; font-weight: bold;">0</div>
                <div style="color: #666; font-size: 14px;">Total Pesanan</div>
            </div>
            <div style="text-align: center; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                <div style="font-size: 28px; color: #2d5016; font-weight: bold;">0%</div>
                <div style="color: #666; font-size: 14px;">Kepuasan</div>
            </div>
            <div style="text-align: center; padding: 15px; background: #f8f9fa; border-radius: 8px;">
                <div style="font-size: 28px; color: #2d5016; font-weight: bold;">24j</div>
                <div style="color: #666; font-size: 14px;">Resp. Time</div>
            </div>
        </div>
    </div>
</div>
@endsection