@extends('layouts.dashboard')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Tambah Jadwal Penyiraman</h3>
    
    <form action="{{ route('plant_waterings.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="time">Waktu Penyiraman</label>
            <input type="time" id="time" name="time" class="form-control" required>
        </div>
        <div class="form-group mb-3">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
                <option value="active">Aktif</option>
                <option value="inactive">Nonaktif</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali ke Dashboard</a>
    </form>
</div>

@endsection
