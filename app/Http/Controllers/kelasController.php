<?php

namespace App\Http\Controllers;

use App\Models\kelasModel;
use App\Models\tahunAkademikModel;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function index()
    {
        $kelas = kelasModel::with('tahunakademik')->get();
        return view('kelas.list', compact('kelas'))
            ->with('title', 'Kelas')
            ->with('judul', 'DAFTAR KELAS');
    }
    public function create()
    {
        $tahunakademik = tahunAkademikModel::all();
        return view('kelas.form', compact('tahunakademik'))
            ->with('title', 'Form')
            ->with('judul', 'FORM KELAS');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'idta' => 'required',

        ]);

        kelasModel::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idta' => $request->idta,

        ]);

        return redirect()->route('kelas.index')->with('success', 'Data Kelas berhasil ditambahkan');
    }

    public function show($id)
    {
        $kelas = kelasModel::find($id);
        $tahunakademik = tahunAkademikModel::all();

        return view('kelas.formedit', compact('kelas', 'tahunakademik'))
            ->with('title', 'Edit')
            ->with('judul', 'FORM EDIT KELAS');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'idta' => 'required',

        ]);

        $kelas = kelasModel::find($id);
        $kelas->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idta' => $request->idta,

        ]);

        return redirect()->route('kelas.index')->with('success', 'Data Kelas berhasil diperbarui');
    }

    public function destroy($id)
    {
        $kelas = kelasModel::find($id);
        $kelas->delete();

        return redirect()->route('kelas.index')->with('success', 'Data Kelas berhasil dihapus');
    }
}
