<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Notifikasi')</title>
    <!-- Tambahkan Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        .header {
            background-color: #3b007b;
            color: white;
        }
        .header .btn {
            background-color: #00bcd4;
            border: none;
            border-radius: 5px;
        }
        .header .btn:hover {
            background-color: #0097a7;
        }
        .content {
            background-color: #7ede4f;
            min-height: 100vh;
            padding: 20px;
        }
        .card {
            margin-bottom: 15px;
            padding: 15px;
            border: none;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .notification-title {
            font-weight: bold;
        }
        .notification-time {
            font-size: 0.9rem;
            color: gray;
        }
        .section-title {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }
        .section-title i {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <div class="header py-3 px-4 d-flex justify-content-between align-items-center">
        <h1 class="h4 m-0">@yield('header-title', 'Notifikasi')</h1>
        <button class="btn btn-primary">@yield('header-button', '+ Jadwal Penyiraman')</button>
    </div>

    <!-- Main Content -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Tambahkan Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
