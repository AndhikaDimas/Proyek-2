@extends('layouts.nontifikasi')

@section('header-title', 'Notifikasi')
@section('header-button', '+ Jadwal Penyiraman')

@section('content')
<div class="container mt-4">
    <div class="section-title">
        <i class="bi bi-bell-fill"></i>
        <h3>Notifikasi</h3>
    </div>

    <!-- Notifikasi 1 -->
    <div class="card">
        <h5 class="notification-title">Penyiraman berakhir pada pukul 06.01</h5>
        <small class="notification-time">Sekarang</small>
    </div>

    <!-- Notifikasi 2 -->
    <div class="card">
        <h5 class="notification-title">Penyiraman dimulai pada pukul 06.00</h5>
        <small class="notification-time">1 menit yang lalu</small>
    </div>
</div>
@endsection
