@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Jadwal Penyiraman</h2>
    <a href="{{ route('plant_waterings.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Waktu</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($plantWaterings as $watering)
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
            @endforeach
        </tbody>
    </table>
</div>
@endsection
