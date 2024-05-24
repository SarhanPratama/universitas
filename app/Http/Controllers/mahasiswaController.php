<?php

namespace App\Http\Controllers;

use App\Models\dosenModel;
use Illuminate\Http\Request;
use App\Models\mahasiswaModel;

class mahasiswaController extends Controller
{
    public function index()
    {
        // $mahasiswa = mahasiswaModel::with(['dosen', 'prodi'])->get();
        $mahasiswa = mahasiswaModel::with(['prodi:id,nama,idfak', 'prodi.fakultas:id,nama', 'dosen:id,nama'])
        ->get();
        return view('mahasiswa.list', compact('mahasiswa'))
            ->with('title', 'mahasiswa')
            ->with('judul', 'DAFTAR MAHASISWA');
    }

    public function create()
    {
        $dosen = dosenModel::all();
        return view('mahasiswa.form', compact('dosen'))
            ->with('title', 'Form')
            ->with('judul', 'FORM MAHASISWA');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'dosen_pa' => 'required',
            'idprodi' => 'required',

        ]);

        mahasiswaModel::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'dosen_pa' => $request->dosen_pa,
            'idprodi' => $request->idprodi,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data mahasiswa berhasil ditambahkan');
    }

    public function show($id)
    {
        $mahasiswa = mahasiswaModel::findOrFail($id);
        $dosen = dosenModel::all();
        return view('mahasiswa.formedit', compact('mahasiswa', 'dosen'))
            ->with('title', 'Form Edit')
            ->with('judul', 'FORM EDIT MAHASISWA');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
            'dosen_pa' => 'required',
            'idprodi' => 'required',

        ]);

        $mahasiswa = mahasiswaModel::findOrFail($id);
        $mahasiswa->update([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
            'dosen_pa' => $request->dosen_pa,
            'idprodi' => $request->idprodi,
        ]);

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $mahasiswa = mahasiswaModel::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Data berhasil dihapus');
    }
}
