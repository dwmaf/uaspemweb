@extends('layouts.layout')
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4 p-3">@include('components.itemkiri')</div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class="bg-light rounded-4 p-4">
                <a class="btn btn-success btn-sm me-auto genshin fs-7 mb-1" href="/daftar-mahasiswa-card">Switch format</a>
                <h4 class="genshin">Daftar Mahasiswa</h4>
                <table id="datatablesSimple" class="genshin fs-7">
                    <thead>
                        <tr class="">
                            <th>No</th>
                            <th>Nim</th>
                            <th>Nama</th>
                            <th>Aksi</th>
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
                                <td class="">
                                    <a class="btn btn-sm btn-primary fs-7" href="/mahasiswa/{{ $mahasiswa->id }}">Detail</a>

                                    @if (auth()->check())
                                        @if (auth()->user()->role === 'admin' || auth()->user()->username === $mahasiswa->nim)
                                            <a class="btn btn-sm btn-warning fs-7"
                                                href="/mahasiswa/{{ $mahasiswa->id }}/edit">Edit</a>
                                        @endif
                                        @if (auth()->user()->role === 'admin')
                                            <button class="btn btn-danger btn-sm fs-7"
                                                onclick="showDeleteModal({{ $mahasiswa }})" href="javascript:void(0)"
                                                data-bs-toggle="modal" data-bs-target="#deleteMahasiswaModal">
                                                Delete
                                            </button>
                                        @endif
                                    @endif
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
    {{-- modal delete starts from here --}}
    <div class="modal fade" id="deleteMahasiswaModal" tabindex="-1" aria-labelledby="deletePengumumanModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title genshin" id="deletePengumumanModalLabel">Konfirmasi Hapus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body genshin fs-7">
                    Apakah Anda yakin ingin menghapus <strong id="deleteMahasiswaName"></strong>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm fs-7 genshin" data-bs-dismiss="modal">Batal</button>
                    <form id="deleteMahasiswaForm" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger fs-7 genshin">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- until here --}}
@endsection
@section('kodejs')
    <script>
        function showDeleteModal(mahasiswa) {
            // Tampilkan nama pengumuman di modal
            document.getElementById('deleteMahasiswaName').textContent = mahasiswa.nama;

            // Atur action form penghapusan
            const deleteForm = document.getElementById('deleteMahasiswaForm');
            deleteForm.action = `/mahasiswa/${mahasiswa.id}`;
        }
    </script>
@endsection
