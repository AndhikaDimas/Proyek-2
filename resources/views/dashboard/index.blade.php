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
        <h4 class="mb-3">Jadwal Penyiraman</h4>
        <a href="{{ route('plant_waterings.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Waktu</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($plantWaterings as $watering)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $watering->time }}</td>
                        <td>{{ $watering->status }}</td>
                        <td>
                            <a href="{{ route('plant_waterings.edit', $watering->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('plant_waterings.destroy', $watering->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Belum ada jadwal penyiraman.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
