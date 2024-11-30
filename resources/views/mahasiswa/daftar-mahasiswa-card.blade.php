@extends('layouts.layout')
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4">kolom 1 25%</div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class="bg-light rounded-4 p-4 row g-0 gap-3 justify-content-center">
                <a class="btn btn-success ms-auto" href="/daftar-mahasiswa">Lihat format table</a>
                <h4 class="genshin">Daftar Mahasiswa</h4>
                @foreach ($mahasiswas as $mahasiswa)
                    <div class="col-3 d-flex flex-column justify-content-between"
                        style="
                background-image:url('/bait-3.png');
                background-size: contain;
                background-repeat: no-repeat;
                background-position: center;
                height: 376px;
                width: 234px;
                ">
                        <div class="d-flex justify-content-between mt-4" style="margin-left: 25px; margin-right:30px">
                            <h1 class="bento mt-4" style=" line-height:0; font-size:40px;">
                                {{ $mahasiswa->nama }}
                            </h1>
                            <h1 class="bento mt-2" style=" line-height:0; font-size:40px;">X</h1>
                        </div>
                        <div class="bg-black d-flex flex-column "
                            style="border: 1px solid black; width:100%; height:77%; border-radius:42px; padding:2px 2px 0 2px; ">
                            <div style="  height:67%; border-radius:40px; overflow:hidden; position:relative; z-index:1;">
                                <img class="img-fluid"
                                    src="{{ asset('storage/' . $mahasiswa->foto) }}"
                                    alt="">
                            </div>
                            <a href="/mahasiswa/{{ $mahasiswa->id }}"
                                class="btn btn-danger mx-auto justify-content-center"
                                style="height:50px;width:50px; position:relative; z-index:2;
                 border-radius:100%; top:-30px;
                 transition: 0.3s ease; box-shadow: 0 0 10px #e60000;">
                                <h1 style="line-height: 0; margin-top:80%; font-size:45px; font-family: 'Bento';">X</h1>
                            </a>
                            <div class="d-flex mx-auto gap-3" style="margin-top: -10px;">
                                <h5 class="genshin"
                                    style="background-color: #3cc1ca;
                    color: black;
                    font-size: 12px;
                    padding: 8px;
                    border-radius: 10px;">
                                    {{ $mahasiswa->nim }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-3 col-12 item-kanan">
            <div class="bg-light rounded-4 p-4">
                @include('components.itemkanan')
            </div>
        </div>
    </div>
@endsection
