<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Plant Waterer')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #C8E350; /* Warna hijau terang */
            font-family: 'Poppins', sans-serif;
        }

        .header {
            background-color: #3a3488; /* Warna ungu */
            color: white;
            padding: 10px;
            border-radius: 0 0 10px 10px; /* Rounded corners at the bottom */
        }

        .card {
            background-color: #c6f5a7; /* Hijau lembut */
            border: none;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-edit {
            background-color: #ffd700; /* Kuning */
            color: black;
        }

        .humidity-icon {
            font-size: 3rem; /* Ukuran ikon */
            color: #3a3488; /* Warna ikon ungu */
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header d-flex justify-content-between align-items-center mb-4">
        <h1 class="ms-3">Plant Waterer</h1>
        <div class="me-3">
            <button class="btn btn-primary">+ Jadwal Penyiraman</button>
            <span class="ms-2">
                <i class="bi bi-bell-fill"></i>
            </span>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>