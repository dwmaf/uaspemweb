@extends('layouts.layout')
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4">kolom 1 25%</div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class="bg-light rounded-4">
                <div class="p-4 mt-2 mb-2 d-flex flex-column align-items-center ">
                    <div class="row d-flex justify-content-center gap-2" style="padding: 0;">
                        <div class="gambar-kiri col-6 d-flex " style="background-image:url('assets/bait.png');
                                    background-size: contain;
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    height: clamp(482px, 61vw,752px);
                                    width: clamp(300px,38.4vw, 468px); padding:10px;">
                            <div class="img-container" style="  height:67%; border-radius:clamp(70px,9.25vw,115px); 
                            overflow:hidden; border:clamp(3px,0.4vw, 6px) solid black; align-self:flex-end">
                                <img class="img-fluid"
                                    src=""
                                    >
                            </div>
                        </div>
                        <div class="data-kanan col-6 d-flex flex-column gap-2" style="width: clamp(300px,38.4vw, 468px); ">
                            <div class="data-atas" style="width: clamp(300px,38.4vw, 468px);background-color: white;border-radius: 55px;padding:20px; ">
                                <h2 class="genshin">{{ $mahasiswa->nama }}</h2>
                                <h5 class="genshin" style="color:darkgrey">{{ $mahasiswa->nim }}</h5>
                                <h4 class="genshin" style="justify-self:start;background-color:#3cc1ca; border-radius:40px; padding:10px;">{{ $mahasiswa->jeniskelamin }}</h4>
                                <div class="d-flex gap-1" style="flex-wrap: wrap; margin-bottom:8px;">
                                    
                                        <h6 class="genshin" style="justify-self:start;border:solid 1px black;font-size:15px; border-radius:40px; padding:6px;margin-bottom:0;">
                                            
                                        </h6>
                                    
                                </div>
                                <div class="d-flex gap-2 mt-1" style="justify-self:start; background-color:#3cc1ca; padding:10px; border-radius:40px">
                                    <div class="d-flex flex-column">
                                        <h5 class="genshin" style="margin-bottom:0; font-size:13px;">tgl</h5>
                                        <h5 class="genshin" style="margin-bottom:0; font-size:13px;">tahun</h5>
                                    </div>
                                    <span style="height: 28px;  border:solid 1px black;"></span>
                                    <h3 class="genshin" style="margin-bottom:0; font-weight:bold; color:#01454a">{{ $mahasiswa->alamat }}</h3>
                                </div>
                            </div>
                            <div class="data-bawah" style="width: clamp(300px,38.4vw, 468px);background-color: white;border-radius: 55px; padding: 20px;">
                                <div style="display: flex; gap:16px">
                                    <button popovertarget="my-popover" style="padding:10px; border:solid 1px black; border-radius:20px;background-color: yellow">
                                        <p class="genshin" style="margin: 0;font-size:14px;">Edit</p>
                                    </button>
                                    <form method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="handler/delete_data.php">
                                        <input type="hidden" name="id" value="">
                                        <button type="submit" name="delete" style="padding: 10px; border: solid 1px black; border-radius: 20px; background-color: red">
                                            <p class="genshin" style="margin: 0; font-size: 14px; color: white;">Hapus</p>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
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
@endsection
