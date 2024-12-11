@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Edit Jadwal Penyiraman</h2>
    <form method="POST" action="{{ route('plant_waterings.update', $plantWatering->id) }}">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="time" class="form-label">Waktu Penyiraman</label>
            <input type="text" name="time" id="time" value="{{ $plantWatering->time }}" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <input type="text" name="status" id="status" value="{{ $plantWatering->status }}" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
