<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/add', function () {
    return view('add');
});
Route::get('/latihan', function () {
    return view('latihan');
});
Route::post('/nilaihuruf', function (Request $request) {
    // dd($request->input('nilaihuruf'));
    $nilai = $request->input('nilaihuruf');
    
    // Tentukan nilai huruf berdasarkan nilai angka
    $nilaiHuruf = '';
    $status = '';
    $color ='';
    if ($nilai >= 80) {
        $nilaiHuruf = 'A';
        $status = 'Anda lulus Passing Grade.';
        $color = 'text-success';
    } elseif ($nilai >= 70) {
        $nilaiHuruf = 'B';
        $status = 'Anda lulus Passing Grade.';
        $color = 'text-success';
    } elseif ($nilai >= 60) {
        $nilaiHuruf = 'C';
        $status = 'Anda lulus Passing Grade.';
        $color = 'text-success';
    } elseif ($nilai >= 50){
        $nilaiHuruf = 'D';
        $status = 'Anda Tidak lulus Passing Grade.';
        $color = 'text-danger';
    }else{
        $nilaiHuruf = 'E';
        $status = 'Anda Tidak lulus Passing Grade.';
        $color = 'text-danger';
    }
    return redirect('/latihan')->with([
        'nilaiHuruf' => $nilaiHuruf,
        'nilai' => $nilai,
        'status' => $status,
        'color' => $color
    ]);
});
Route::post('/genapganjil', function (Request $request) {
    $nilai = $request->input('genapganjil');
    if($nilai === "Genap"){
        $angkas = range(10, 0, 2);
    }else{
        $angkas = range(1, 10, 2);
    }
    return redirect('/latihan')->with('angkas', $angkas);
});
Route::resource('/mahasiswa', MahasiswaController::class);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::post('/editdatadiri', function(Request $request){
    // dd($request->nim);
    $mahasiswa = Mahasiswa::where('nim',$request->nim)->first();
    return view('edit-mahasiswa', [
        'mahasiswa' => $mahasiswa
    ]);
});
