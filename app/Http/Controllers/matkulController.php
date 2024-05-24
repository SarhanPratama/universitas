<?php

namespace App\Http\Controllers;

use App\Models\matkulModel;
use Illuminate\Http\Request;

class matkulController extends Controller
{
    public function index()
    {

        // $matkul = matkulModel::all();
        $matkul = matkulModel::paginate(5);

        return view('matkul.list', compact('matkul'))
            ->with('title', 'Matakuliah')
            ->with('judul', 'DAFTAR MATAKULIAH');
    }

    public function create()
    {
        return view('matkul.form')
            ->with('title', 'Form')
            ->with('judul', 'FORM MATAKULIAH');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required',
            
        ]);

        matkulModel::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matkul.index')->with('success', 'Data matakuliah berhasil ditambahkan');
    }

    public function show($id)
    {
        $matkul = matkulModel::findOrFail($id);
       

        return view('matkul.formedit', compact('matkul'))
            ->with('title', 'Form Edit')
            ->with('judul', 'FORM EDIT MATAKULIAH');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'sks' => 'required',
            
        ]);

        $matkul = matkulModel::findOrFail($id);
        $matkul->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'sks' => $request->sks,
        ]);

        return redirect()->route('matkul.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $matkul = matkulModel::findOrFail($id);
        $matkul->delete();

        return redirect()->route('matkul.index')->with('success', 'Data berhasil dihapus');
    }
}
