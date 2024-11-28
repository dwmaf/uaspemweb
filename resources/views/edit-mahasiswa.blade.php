@extends('layouts.layout')
@section('kodecss')
    <style>
        @media (max-width: 992px) {
            .item-kiri {
                margin-bottom: 5px;
            }

            .item-kanan {
                margin-top: 5px;
            }
        }
    </style>
@endsection
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4">kolom 1 25%</div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class="bg-light rounded-4 p-4">
                <form class="" method="post" action="/mahasiswa/{{ $mahasiswa->id }}" enctype="multipart/form-data">
                    <h5 class="genshin mb-1">Edit data anda</h5>
                    <div class="mb-3 ">
                        <label class="form-label genshin" for="nim">Nim</label>
                        <input class="form-control genshin fs-7" name="nim" id="nim" type="text"
                            value="{{ $mahasiswa->nim }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label genshin">Nama</label>
                        <input class="form-control genshin fs-7" name="nama" type="text"
                            value="{{ $mahasiswa->nama }}">
                    </div>
                    <div class="mb-3">
                        <label class="form-label genshin d-block">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio1"
                                value="Laki-laki" {{ $mahasiswa->jeniskelamin === 'Laki-laki' ? 'checked' : '' }}>
                            <label class="form-check-label genshin fs-7" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio2"
                                value="Perempuan" {{ $mahasiswa->jeniskelamin === 'Perempuan' ? 'checked' : '' }}>
                            <label class="form-check-label genshin fs-7" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label genshin d-block">Hobi</label>
                        @php
                            $hobi = json_decode($mahasiswa->hobi, true); // Decode JSON ke array
                        @endphp
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi" id="inlineCheckbox1"
                                value="Ngoding" {{ in_array('Ngoding', $hobi) ? 'checked' : '' }}>
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox1">Ngoding</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi[]" id="inlineCheckbox2"
                                value="Berenang" {{ in_array('Berenang', $hobi) ? 'checked' : '' }}>
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox2">Berenang</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi[]" id="inlineCheckbox3"
                                value="Berkuda" {{ in_array('Berkuda', $hobi) ? 'checked' : '' }}>
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox3">Berkuda</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi[]" id="inlineCheckbox4"
                                value="Memanah" {{ in_array('Memanah', $hobi) ? 'checked' : '' }}>
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox4">Memanah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFileLg" class="form-label genshin">Agama</label>
                        <select class="form-select genshin fs-7" name="agama" aria-label="Default select example">
                            <option selected value="islam" class="genshin fs-7" {{ $mahasiswa->agama === 'Islam' ? 'selected' : '' }}>islam</option>
                            <option value="Kristen" class="genshin fs-7" {{ $mahasiswa->agama === 'Kristen' ? 'selected' : '' }}>Kristen</option>
                            <option value="Konghuchu" class="genshin fs-7" {{ $mahasiswa->agama === 'Konghuchu' ? 'selected' : '' }}>Konghuchu</option>
                            <option value="Buddha" class="genshin fs-7" {{ $mahasiswa->agama === 'Buddha' ? 'selected' : '' }}>Buddha</option>
                            <option value="Hindu" class="genshin fs-7" {{ $mahasiswa->agama === 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label genshin">Alamat</label>
                        <textarea name="alamat" id="" class="form-control genshin fs-7">{{ $mahasiswa->alamat }}</textarea>
                    </div>
                    <div class="mb-3 d-flex flex-column">
                        <label class="form-label genshin ">Foto</label>
                        <img id="previewImage" src="{{ asset('storage/' . $mahasiswa->foto) }}" alt="Foto Mahasiswa"
                            class="w-25 mb-1 border border-2 border-dark rounded-4">
                        <input class="form-control genshin fs-7" name="foto" type="file"
                            onchange="changeImage(event)">
                    </div>
                    <button class="btn btn-primary genshin" type="submit">Update</button>
                </form>
            </div>
        </div>
        <div class="col-lg-3 col-12 item-kanan">
            <div class="bg-light rounded-4 p-4">
                @include('components.itemkanan')
            </div>
        </div>
    </div>
@endsection
@section('kodejs')
    <script>
        function changeImage(event) {
            const previewImage = document.getElementById('previewImage');
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    console.log(e.target.result);

                    previewImage.src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        }
    </script>
@endsection
