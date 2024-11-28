@extends('layouts.layout')
@section('child')
    <div class="row gx-1 my-1">
        <div class="col-lg-3 col-12 item-kiri">
            <div class="bg-light rounded-4">kolom 1 25%</div>
        </div>
        <div class="col-lg-6 col-12 ">
            <div class="bg-light rounded-4">kolom 1 25%</div>
        </div>
        <div class="col-lg-3 col-12 item-kanan">
            <div class="bg-light rounded-4 p-4">
                @include('components.itemkanan')
            </div>
        </div>
    </div>
@endsection
