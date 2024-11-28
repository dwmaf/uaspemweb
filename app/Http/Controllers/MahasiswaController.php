<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/daftar-mahasiswa', [
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jeniskelamin'=>'required',
            'hobi'=>'array',
            'agama'=>'required',
            'alamat'=>'required',
            'foto'=>'image',
        ]);
        if($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto_mahasiswa');
        }
        $validatedData['hobi'] = isset($validatedData['hobi']) ? json_encode($validatedData['hobi']) : null;
        Mahasiswa::create($validatedData);
        return redirect('/add')->with('success', 'Data mahasiswa baru berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        return view('/detail-mahasiswa', [
            'mahasiswa' => Mahasiswa::where('id', $mahasiswa->id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        return view('/edit-mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $validatedData = $request->validate([
            'nim' => 'required|max:10|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|max:100',
            'jeniskelamin' => 'required|in:Laki-laki,Perempuan',
            'hobi' => 'array',
            'agama' => 'required',
            'alamat' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        if ($request->file('foto')) {
            if ($mahasiswa->foto) {
                Storage::delete($mahasiswa->foto);
            }
            $validatedData['foto'] = $request->file('foto')->store('mahasiswa/foto', 'public');
        }
    
        $validatedData['hobi'] = isset($validatedData['hobi']) ? json_encode($validatedData['hobi']) : null;
        $mahasiswa->update($validatedData);
    
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        if($mahasiswa->foto){
            Storage::delete($mahasiswa->foto);
        }
        Mahasiswa::destroy($mahasiswa->id);
        return redirect('/mahasiswa')->with('success', 'Data mahasiswa berhasil dihapus');
    }
    
}
