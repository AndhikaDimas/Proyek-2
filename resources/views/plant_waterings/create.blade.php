@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Tambah Jadwal Penyiraman</h2>
    <form method="POST" action="{{ route('plant_waterings.store') }}">
        @csrf
        <div class="mb-3">
            <label for="time" class="form-label">Waktu Penyiraman</label>
            <input type="text" name="time" id="time" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
