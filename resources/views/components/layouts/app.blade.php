<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>

    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/vendors/boxicons-2.1.4/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}>
</head>

<body class="bg-body-tertiary">
    <nav class="navbar navbar-expand-lg py-3 border-bottom bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href=".">KaryaHub</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-0 ms-md-5" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-2">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" wire:navigate href="{{ route('dashboard') }}">
                            <i class="bx bx-home"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="karyawan.html">
                            <i class="bx bx-user-pin"></i> Karyawan
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" wire:navigate href="{{ route('posisi-kerja.index') }}">
                            <i class='bx bx-objects-horizontal-left'></i> Posisi Pekerjaan
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto">
                    <p class="mb-0 text-dark">Hi, Adrian</p>
                </ul>
            </div>
        </div>
    </nav>

    <section class="py-5">
        <div class="container">
            {{ $slot }}
        </div>
    </section>

    <script src="{{ url('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    </body>

</html>
