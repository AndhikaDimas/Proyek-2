@extends('layouts.dashboard')

@section('content')

<div class="container mt-4">
    <h3 class="mb-4">Edit Jadwal Penyiraman</h3>
    
    <form action="{{ route('plant_waterings.update', $plantWatering->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Metode untuk mengupdate data -->
        
        <div class="form-group mb-3">
            <label for="time">Waktu Penyiraman</label>
            <input type="time" id="time" name="time" class="form-control" value="{{ old('time', $plantWatering->time) }}" required>
        </div>

        <div class="form-group mb-3">
            <label for="status">Status</label>
            <select id="status" name="status" class="form-control">
                <option value="active" {{ old('status', $plantWatering->status) === 'active' ? 'selected' : '' }}>Aktif</option>
                <option value="inactive" {{ old('status', $plantWatering->status) === 'inactive' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Kembali ke Dashboard</a>
    </form>
</div>

@endsection
