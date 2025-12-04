@extends('layouts.app')

@section('title', 'Login - GoCamp')

@section('styles')
<style>
    body {
        background: linear-gradient(135deg, #2d5016 0%, #4a7c2c 100%) !important;
    }

    main {
        display: flex !important;
        justify-content: center !important;
        align-items: center !important;
        min-height: 100vh !important;
        padding: 20px !important;
    }

    .container {
        max-width: 100% !important;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .login-container {
        background: white;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        width: 100%;
        max-width: 400px;
    }

    .login-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .login-header h1 {
        color: #2d5016;
        font-size: 32px;
        margin-bottom: 10px;
    }

    .login-header p {
        color: #666;
        font-size: 14px;
    }

    .logo {
        font-size: 60px;
        margin-bottom: 10px;
    }

    .btn-login {
        width: 100%;
        padding: 12px;
        background: #2d5016;
        color: white;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-login:hover {
        background: #3d6b1f;
    }
</style>
@endsection

@section('content')
<div class="login-container">
    <div class="login-header">
        <div class="logo">⛺</div>
        <h1>GoCamp</h1>
        <p>Masukkan username dan password anda untuk login.
        </p>
    </div>
    
    <form action="{{ route('authenticate') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" class="form-control" 
                   placeholder="Masukkan username" required>
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="form-control" 
                   placeholder="Masukkan password" required>
        </div>
        
        <button type="submit" class="btn-login">Masuk</button>
    </form>
</div>
@endsection