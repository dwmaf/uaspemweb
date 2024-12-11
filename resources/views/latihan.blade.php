@extends('layouts.layout')
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4 p-3">
                @include('components.itemkiri')
            </div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class="bg-light rounded-4 p-4">
                <form class="" method="post" action="/nilaihuruf">
                    @csrf
                    <div class="mb-3 ">
                        <label class="form-label genshin">Nilai Huruf</label>
                        <input class="form-control genshin fs-7" name="nilaihuruf" type="number" placeholder="Masukkan nilai anda" max="100">
                    </div>
                    <button class="btn btn-primary genshin fs-7" type="submit">Check Nilai Anda</button>
                </form>
                @if (session('nilaiHuruf'))
                    <p class="genshin fs-7 mt-2">Nilai angka: {{ session('nilai') }}</p>
                    <p class="genshin fs-7 mt-2">Nilai huruf: {{ session('nilaiHuruf') }}</p>
                    <p class="genshin fs-7 mt-2 {{ session('color') }}">{{ session('status') }}</p>
                @endif
                <form class="mt-4" method="post" action="/genapganjil">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label genshin">Ganjil/Genap</label>
                        <select class="form-select genshin fs-7" name="genapganjil" aria-label="Default select example">
                            <option selected value="Genap" class="genshin fs-7">Genap</option>
                            <option value="Ganjil" class="genshin fs-7">Ganjil</option>
                        </select>
                    </div>
                    <button class="btn btn-primary genshin fs-7" type="submit">Generate</button>
                </form>
                @if (session('angkas'))
                    @foreach (session('angkas') as $angka)
                        <p class="genshin fs-7 mt-2">The number is: {{ $angka }}</p>
                    @endforeach
                @endif

            </div>
        </div>
        <div class="col-lg-3 col-12 item-kanan">
            <div class="bg-light rounded-4 p-4">
                @include('components.itemkanan')
            </div>
        </div>
    </div>
@endsection
