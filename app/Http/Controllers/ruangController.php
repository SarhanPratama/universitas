<?php

namespace App\Http\Controllers;

use App\Models\ruangModel;
use Illuminate\Http\Request;

class ruangController extends Controller
{

    public function index()
    {
        // $ruang = ruangModel::all();
        $ruang = ruangModel::paginate(5);
        return view('ruang.list', compact('ruang'))
            ->with('title', 'Ruang')
            ->with('judul', 'DAFTAR RUANGAN');
    }

    public function create()
    {
        return view('ruang.form')
            ->with('title', 'Form')
            ->with('judul', 'FORM RUANGAN');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:ruang',
            'nama' => 'required',
        ],  [
            'kode.unique' => 'Kode sudah terdaftar.',
        ]);

        ruangModel::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('ruang.index')->with('success', 'Data RUANG berhasil ditambahkan');
    }

    public function show($id)
    {
        $ruang = ruangModel::findOrFail($id);


        return view('ruang.formedit', compact('ruang'))
            ->with('title', 'Form Edit')
            ->with('judul', 'FORM EDIT RUANG');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $ruang = ruangModel::findOrFail($id);
        $ruang->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('ruang.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $ruang = ruangModel::findOrFail($id);
        $ruang->delete();

        return redirect()->route('ruang.index')->with('success', 'Data berhasil dihapus');
    }
}
