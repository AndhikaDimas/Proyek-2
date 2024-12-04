@extends('layouts.app')

@section('content')
<div class="card">
    <h2>Daftar Akun</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group">
            <label for="username">User  Name</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username" required class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password" required class="form-control">
        </div>
        <div class="form-group">
            <label for="confirmPassword">Konfirmasi Password</label>
            <input type="password" id="confirmPassword" name="confirm_password" placeholder="Konfirmasi password" required class="form-control">
        </div>
        <div class="text-center">
            <a href="{{ route('login') }}" class="link">Sudah Punya Akun?</a>
        </div>
        <button type="submit" class="btn btn-primary w-100">Daftar</button>
    </form>
</div>
@endsection