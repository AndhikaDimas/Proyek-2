@extends('layouts.dashboard')

@section('content')

<div class="container mt-4">
    <div class="card text-center p-4 mb-4">
        <h3>Kelembaban Tanah</h3>
        <i class="bi bi-droplet-fill humidity-icon my-3"></i>
        <h2>20%</h2>
    </div>
    <!-- Jadwal Penyiraman -->
    <div class="card p-3 mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-1">Penyiraman mulai pukul</p>
                <h4>06.00</h4>
            </div>
            <div>
                <button class="btn btn-info text-white">Aktifkan</button>
                <button class="btn btn-secondary">Matikan</button>
                <button class="btn btn-edit">Edit</button>
            </div>
        </div>
    </div>
    <div class="card p-3 mb-3">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <p class="mb-1">Penyiraman mulai pukul</p>
                <h4>17.00</h4>
            </div>
            <div>
                <button class="btn btn-info text-white">Aktifkan</button>
                <button class="btn btn-secondary">Matikan</button>
                <button class="btn btn-edit">Edit</button>
            </div>
        </div>
    </div>
</div>
@endsection