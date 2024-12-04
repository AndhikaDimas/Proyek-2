@extends('layouts.app')

@section('content')
<div class="bg-white rounded shadow p-4 w-100" style="max-width: 400px;">
    <h2 class="text-center mb-4">Masuk</h2>
    <form method="POST" action="#">
        @csrf
        <div class="mb-3">
            <label for="uname" class="form-label">User Name</label>
            <input type="text" id="uname" name="uname" placeholder="Masukkan username" required class="form-control" />
        </div>
        <div class="mb-3">
            <label for="psw" class="form-label">Password</label>
            <input type="password" id="psw" name="psw" placeholder="Masukkan password" required class="form-control" />
        </div>
        <p class="text-center mb-4">
            <a href="{{ route('register') }}" class="text-success">Belum Punya Akun?</a>
        </p>
        <button type="submit" class="btn btn-primary w-100">Masuk</button>
    </form>
</div>
@endsection
