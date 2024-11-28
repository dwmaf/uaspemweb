@extends('layouts.layout')
@section('child')
<div class="row gx-1 my-1">
    <div class="col-lg-3 col-12 item-kiri">
        <div class="bg-light rounded-4">kolom 1 25%</div>
    </div>
    <div class="col-lg-6 col-12 ">
        <div class="bg-light rounded-4 p-4">
            <a class="btn btn-success ms-auto" href="/daftar-mahasiswa-card">Lihat format card</a>
            <h4 class="genshin">Daftar Mahasiswa</h4>
            <table id="datatablesSimple" class="genshin fs-7">
                <thead>
                        <tr class="">
                            <th >No</th>
                            <th >Nim</th>
                            <th >Nama</th>
                            <th >Aksi</th>
                        </tr>
                </thead>
                    <tbody>
                        @foreach ($mahasiswas as $mahasiswa)
                        <tr class="fs-7">
                            <td >{{ $loop->iteration }}</td>
                            <td >
                                {{ $mahasiswa->nim }}
                            </td>
                            <td>{{ $mahasiswa->nama }}</td>
                            <td class="">
                                <a class="btn btn-sm btn-primary fs-7" href="/mahasiswa/{{ $mahasiswa->id }}">Detail</a>
                                <a class="btn btn-sm btn-warning fs-7" href="/mahasiswa/{{ $mahasiswa->id }}/edit">Edit</a>
                                <form action="/mahasiswa/{{ $mahasiswa->id }}" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-sm btn-danger fs-7">Delete</button>
                                </form>
                            </td>
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