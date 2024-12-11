@extends('layouts.layout')
@section('child')
@session('success')
    <div class="alert alert-success mt-2">
       {{ session('success') }}
    </div>
@endsession
    <div class="row gx-1 my-1 d-flex">
        <div class="col-lg-3 col-12 item-kiri d-flex ">
            <div class="bg-light rounded-4 w-100 p-3">@include('components.itemkiri')</div>
        </div>
        <div class="col-lg-6 col-12 d-flex">
            <div class=" rounded-4 p-3 w-100" style="background-color:rgba(0, 0, 0, 0.5);backdrop-filter: blur(5px)">
                <div class="d-flex justify-content-between p-2"
                    style="background-size: 100% 100%;background-repeat: no-repeat;height: 200px;width: 275px;background-image: url('{{ asset('componen1.png') }}');">
                    <div class="portofolio d-flex flex-column justify-content-between p-1 pb-2">
                        <div>
                            <div class="bento fs--1" style="line-height:0.9">UAS</div>
                            <div class="bento fs--1" style="line-height:0.9">Pemweb</div>
                        </div>
                        <div class="d-flex gap-2 mb-3 ms-2">
                            <a href="/" class="bg-primary-one rounded-5 genshin p-1 fs-7">Home</a>
                            <a href="/" class="bg-primary-one rounded-5 genshin p-1 fs-7">Mahasiswa</a>
                        </div>
                    </div>

                    <div class="d-flex flex-column justify-content-between p-2">
                        <a class="bg-primary-two rounded-5 d-flex align-items-center justify-content-center" style="width: 50px; height:50px" target="_blank" href="https://github.com/dwmaf/Project-Pemweb">
                            <img src="{{ asset('icon-arrow.png') }}" style="width: 27px; height:27px;"  alt=""></a>
                        <div class="d-flex mb-4">
                            <div class="genshin fs-3">{{ $jumlahmahasiswa }}</div>
                            <div class="bento fs-0 text-primary-two" style="line-height: 0.8">X</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-12 item-kanan d-flex">
            <div class="bg-light rounded-4 p-4 w-100">
                @include('components.itemkanan')
            </div>
        </div>
    </div>
@endsection
