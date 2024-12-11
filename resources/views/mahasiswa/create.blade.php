@extends('layouts.layout')
@section('kodecss')
@endsection
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4 p-3">
                @include('components.itemkiri')
            </div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class="bg-light rounded-4 p-4">
                <form class="" method="post" action="/mahasiswa" enctype="multipart/form-data">
                    @csrf
                    <h4 class="genshin mb-1">Tambah data mahasiswa baru</h4>
                    <div class="mb-3 ">
                        <label class="form-label genshin" for="nim">Nim</label>
                        <input class="form-control genshin fs-7" name="nim" id="nim" type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label genshin">Nama</label>
                        <input class="form-control genshin fs-7" name="nama" type="text">
                    </div>
                    <button class="btn btn-primary genshin" type="submit">Tambah</button>
                </form>
                <h4 class="genshin mt-5">Daftar Mahasiswa</h4>
                <table id="datatablesSimple" class="genshin fs-7">
                    <thead>
                        <tr class="">
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $mahasiswa)
                            <tr class="fs-7">
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    {{ $mahasiswa->nim }}
                                </td>
                                <td>{{ $mahasiswa->nama }}</td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-lg-3 col-12 item-kanan">
            <div class="bg-light rounded-4 p-4">
                @include('components.itemkanan')
            </div>
        </div>
    </div>
@endsection
