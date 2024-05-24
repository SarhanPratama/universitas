<?php

namespace App\Http\Controllers;

use App\Models\dosenModel;
use App\Models\fakultasModel;
use Illuminate\Http\Request;


class fakultasController extends Controller
{


    public function index()
    {
        $fakultas = fakultasModel::with('dosen')->get();
       
        return view('fakultas.list1', compact('fakultas'))
            ->with('title', 'fakultas')
            ->with('judul', 'DAFTAR FAKULTAS');
    }

    public function create()
    {
        $dosen = dosenModel::all();
        return view('fakultas.form1', compact('dosen'))
            ->with('title', 'Form')
            ->with('judul', 'FORM FAKULTAS');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'iddosen' => 'required',
        ]);

        fakultasModel::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'iddosen' => $request->iddosen,
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Data fakultas berhasil ditambahkan');
    }

    public function show($id)
    {   
        $fakultas = fakultasModel::findOrFail($id);
        $dosen = dosenModel::all();

        return view('fakultas.formedit', compact('fakultas', 'dosen'))
            ->with('title', 'Form Edit')
            ->with('judul', 'FORM EDIT FAKULTAS')
            ->with('id', $id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
            'iddosen' => 'required',
        ]);

        $fakultas = fakultasModel::findOrFail($id);
        $fakultas->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'iddosen' => $request->iddosen,
        ]);

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $fakultas = fakultasModel::findOrFail($id);
        $fakultas->delete();

        return redirect()->route('fakultas.index')->with('success', 'Data berhasil dihapus');
    }
}
