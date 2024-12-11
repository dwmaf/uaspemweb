@extends('layouts.layout')
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4 p-3">@include('components.itemkiri')</div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class=" d-flex flex-column align-items-center ">
                <div class="row d-flex justify-content-center gap-2" style="padding: 0;">
                    <div class="col-6 d-flex "
                        style="background-image:url('{{ asset('card-1.png') }}');
                                background-size: contain;
                                background-repeat: no-repeat;
                                background-position: center;
                                height: 482px;
                                width: 300px; padding:10px;">
                        <div class="img-container"
                            style="  height:67%; border-radius:70px; 
                        overflow:hidden; border:clamp(3px,0.4vw, 6px) solid black; align-self:flex-end">
                            <img class="img-fluid;" src="{{ asset('storage/' . $mahasiswa->foto) }}" onclick="onLoadImage({{ $mahasiswa }})"
                            href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#fotoModal">
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-column gap-2 rounded-4"
                        style="width: 300px;background-color: white;padding:20px; ">
                        <h2 class="genshin">{{ $mahasiswa->nama }}</h2>
                        <h5 class="genshin" style="color:darkgrey">{{ $mahasiswa->nim }}</h5>
                        <h4 class="genshin"
                            style="justify-self:start;background-color:#3cc1ca; border-radius:40px; padding:10px;">
                            {{ $mahasiswa->jeniskelamin }}</h4>
                        <div class="d-flex gap-1" style="flex-wrap: wrap; margin-bottom:8px;">
                            @php
                                $hobbies = $mahasiswa->hobi ? json_decode($mahasiswa->hobi, true) : [];
                            @endphp
                            @foreach ($hobbies as $hobby)
                                <h6 class="genshin"
                                    style="justify-self:start; border:solid 1px black;font-size:15px; border-radius:40px; padding:6px;margin-bottom:0;">
                                    {{ $hobby }}
                                </h6>
                            @endforeach
                        </div>
                        <h5 class="genshin fs-6">{{ $mahasiswa->agama }}</h5>
                        <div class="genshin" style="background-color:#3cc1ca; padding:10px; border-radius:40px">
                            {{ $mahasiswa->alamat }}</div>
                    </div>
                </div>

            </div>
        </div>
        <div class="col-lg-3 col-12 item-kanan">
            <div class="bg-light rounded-4 p-4">
                @include('components.itemkanan')
            </div>
        </div>
    </div>

    {{-- modal untuk detail foto --}}
    <div class="modal fade" id="fotoModal" tabindex="-1" aria-labelledby="fotoModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img alt="" id="previewImage" class="img-thumbnail">
                    {{-- content here --}}
                </div>
            </div>
        </div>
    </div>
    {{-- until here --}}

@endsection
@section('kodejs')
    <script>
        function onLoadImage(mahasiswa){
            if (mahasiswa.foto) {
                previewImage.src = `/storage/${mahasiswa.foto}`;
            }
        }
    </script>
@endsection