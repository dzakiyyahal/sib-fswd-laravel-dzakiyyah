<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>
        @yield('title')
    </title>
</head>

<body>
    <div class="row">
        <div class="col-md-2">
            <div class="sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('dashboard/slider') }}">Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-3" href="{{ url('dashboard/kategori') }}">Kategori</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link pl-3">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-5" href="{{ url('dashboard/daftar-produk') }}">Kategory</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-5" href="{{ url('dashboard/daftar-produk') }}">Daftar Produk</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link pl-3">Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-5" href="{{ url('dashboard/grup-pengguna') }}">Grup Pengguna</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link pl-5" href="{{ url('dashboard/daftar-pengguna') }}">Daftar Pengguna</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            @yield('content')
        </div>
    </div>
</body>

</html>
