@extends('layouts.layout')
@section('kodecss')
    
@endsection
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4">kolom 1 25%</div>
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
                    <div class="mb-3">
                        <label class="form-label genshin d-block">Jenis Kelamin</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio1"
                                value="Laki-laki">
                            <label class="form-check-label genshin fs-7" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jeniskelamin" id="inlineRadio2"
                                value="Perempuan">
                            <label class="form-check-label genshin fs-7" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label genshin d-block">Hobi</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi[]" id="inlineCheckbox1"
                                value="Ngoding">
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox1">Ngoding</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi[]" id="inlineCheckbox2"
                                value="Berenang">
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox2">Berenang</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi[]" id="inlineCheckbox3"
                                value="Berkuda">
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox3">Berkuda</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="hobi[]" id="inlineCheckbox4"
                                value="Memanah">
                            <label class="form-check-label genshin fs-7" for="inlineCheckbox4">Memanah</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="formFileLg" class="form-label genshin">Agama</label>
                        <select class="form-select genshin fs-7" name="agama" aria-label="Default select example">
                            <option selected value="islam" class="genshin fs-7">islam</option>
                            <option value="Kristen" class="genshin fs-7">Kristen</option>
                            <option value="Konghuchu" class="genshin fs-7">Konghuchu</option>
                            <option value="Buddha" class="genshin fs-7">Buddha</option>
                            <option value="Hindu" class="genshin fs-7">Hindu</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label genshin">Alamat</label>
                        <textarea name="alamat" id="" class="form-control genshin fs-7"></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label genshin">Foto</label>
                        <input class="form-control genshin fs-7" name="foto" type="file">
                    </div>

                    <button class="btn btn-primary genshin" type="submit">Tambah</button>
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
