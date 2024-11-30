<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Uas Pemweb</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="/js/datatables-simple-demo.js"></script>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<style>
    body {
        background-image: url('{{ asset('aset2.webp') }}');
        background-size: cover;
        backdrop-filter: blur(3px);
        padding: 8px;
        min-height: 100vh;
    }

    @font-face {
        font-family: 'Bento';
        src: url('{{ asset('Bento-2OXaW.woff2') }}') format('woff2')
    }

    .bento {
        font-family: 'Bento', sans-serif;
    }

    @font-face {
        font-family: "Genshin";
        src: url('{{ asset('zh-cn.woff2') }}') format("woff2");
    }

    .genshin {
        font-family: "Genshin", sans-serif;
    }

    a {
        text-decoration: none;
        color: black;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p {
        margin: 0;
        padding: 0;
    }

    .fs-7 {
        font-size: 12px;
    }

    @media (max-width: 992px) {
        .item-kiri {
            margin-bottom: 5px;
        }

        .item-kanan {
            margin-top: 5px;
        }
    }
</style>
@yield('kodecss')

<body>
    <header class="bg-white p-5 rounded-4 d-flex justify-content-center">
        <h1 class="genshin">UAS Pemweb</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-light rounded-4 mt-1">
        <div class="container-fluid d-flex justify-content-center">
            {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link genshin {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    <a class="nav-link genshin {{ Request::is('mahasiswa/create') ? 'active' : '' }}" href="{{ route('mahasiswa.create') }}">Add</a>
                    <a class="nav-link genshin {{ Request::is('latihan') ? 'active' : '' }}" href="/latihan">Latihan</a>
                    <a class="nav-link genshin {{ Request::is('mahasiswa') ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('child')
    </main>
    <footer class="bg-light rounded-4 p-5">
        <div class="row">
            <a class="col-lg genshin" href="./index.php">
                UAS Pemweb
            </a>
            <div class="col-lg d-flex flex-column gap-2">
                <h6 class="head genshin">Menu</h6>
                <a class="genshin fs-7" style="" href="">Home</a>
                <a class="genshin fs-7" href="">Kontak</a>
                <a class="genshin fs-7" href="">Latihan</a>
                <a class="genshin fs-7" href="">Daftar Mahasiswa</a>
            </div>
        </div>

        <p class="genshin">Created by Dawam Agung Fathoni</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    @yield('kodejs')
</body>

</html>
