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
    .fs-0{
        font-size:100px;
    }
    .fs--1{
        font-size: 55px;
    }
    .lh-0{
        line-height: 0;
    }
    @media (max-width: 992px) {
        .item-kiri {
            margin-bottom: 5px;
        }

        .item-kanan {
            margin-top: 5px;
        }
    }
    .navbar .navbar-nav .active{
        color: #FF0000;
    }
    .navbar .nav-link{
        color: black;
    }
    .navbar .nav-link:hover{
        color: #3CC1CA
    }
    .bg-primary-one{
        background-color: #3CC1CA;
    }
    .bg-primary-two{
        background-color: #FF0000;
    }
    .text-primary-one{
        color: #3CC1CA;
    }
    .text-primary-two{
        color:#FF0000;
    }
</style>
@yield('kodecss')

<body>
    <header class=" p-4 rounded-4 d-flex flex-column align-items-center gap-1" style="background-color: rgba(0,0,0,0.5); backdrop-filter:blur(5px)">
        <div class="d-flex gap-3">
            <div class="rounded-4" style=" background-color: #3CC1CA; width:50px; height:50px;"></div>
            <div class="rounded-4" style=" background-color:#FF0000; width:50px; height:50px;"></div>
            <div class="rounded-4" style=" background-color:white; width:50px; height:50px;"></div>
        </div>
        <h1 class="genshin " style="color: white">UAS Pemweb</h1>
    </header>
    <nav class="navbar navbar-expand-lg bg-light rounded-4 mt-1">
        <div class="container-fluid d-flex justify-content-center">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link genshin {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    <a class="nav-link genshin {{ Request::is('latihan') ? 'active' : '' }}" href="/latihan">Latihan</a>
                    <a class="nav-link genshin {{ Request::is('mahasiswa') ? 'active' : '' }}" href="/mahasiswa">Mahasiswa</a>
                    <a class="nav-link genshin {{ Request::is('mahasiswa/create') ? 'active' : '' }}" href="/mahasiswa/create">Add</a>
                </div>
            </div>
        </div>
    </nav>
    <main>
        @yield('child')
    </main>
    <footer class="rounded-4 p-5" style="background-color: rgba(0,0,0,0.5); backdrop-filter:blur(5px)">
        <div class="row gap-3">
            <a class="col-lg genshin d-flex flex-column gap-1" href="/">
                <div class="d-flex gap-2" style="margin-left: 1rem">
                    <div class="rounded-2" style=" background-color: #3CC1CA; width:30px; height:30px;"></div>
                    <div class="rounded-2" style=" background-color:#FF0000; width:30px; height:30px;"></div>
                    <div class="rounded-2" style=" background-color:white; width:30px; height:30px;"></div>
                </div>
                <h5 class="genshin " style="color: white">UAS Pemweb</h5>
            </a>
            <div class="col-lg d-flex flex-column gap-2">
                <h6 class="head genshin" style="color:white">Menu</h6>
                <a class="genshin fs-7" style="color:white" href="/">Home</a>
                <a class="genshin fs-7" style="color:white" href="/mahasiswa/create">Kontak</a>
                <a class="genshin fs-7" style="color:white" href="/latihan">Latihan</a>
                <a class="genshin fs-7" style="color:white" href="/mahasiswa">Daftar Mahasiswa</a>
            </div>
        </div>

        <p class="genshin mt-3" style="color:white">Created by Dawam Agung Fathoni</p>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    @yield('kodejs')
</body>

</html>
