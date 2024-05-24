<?php

namespace App\Http\Controllers;

use App\Models\fakultasModel;
use App\Models\jenjangModel;
use App\Models\prodiModel;
use Illuminate\Http\Request;

class prodiController extends Controller
{
    public function index()
    {
        $prodi = prodiModel::with(['fakultas', 'jenjang'])->get();
        return view('prodi.list', compact('prodi'))
            ->with('title', 'Prodi')
            ->with('judul', 'DAFTAR PRODI');
    }

    public function create()
    {
        // $prodi = prodiModel::with(['fakultas', 'jenjang'])->get();
        // // $prodi = prodiModel::get();

        $fakultas = fakultasModel::all();
        $jenjang = jenjangModel::all();
        return view('prodi.form', compact('fakultas', 'jenjang'))
            ->with('title', 'Form Prodi')
            ->with('judul', 'FORM PRODI');

    }
    public function store(Request $request)
    {
        $request->validate([
            'idfak' => 'required',
            'kode' => 'required|unique:prodi',
            'nama' => 'required',
            'idjenjang' => 'required',
            'tglsk' => 'required',
            'akreditasi' => 'required',
        ], [
            'kode.unique' => 'Kode Sudah terdaftar.',
        ]);

        prodiModel::create([
            'idfak' => $request->idfak,
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idjenjang' => $request->idjenjang,
            'tglsk' => $request->tglsk,
            'akreditasi' => $request->akreditasi,
        ]);

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil ditambahkan');
    }

    public function show($id)
    {
        $prodi = prodiModel::find($id);
        $fakultas = fakultasModel::all();
        $jenjang = jenjangModel::all();

        return view('prodi.formedit', compact('prodi', 'fakultas', 'jenjang'))
            ->with('title', 'Form Edit Prodi')
            ->with('judul', 'FORM EDIT PRODI');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'idfak' => 'required',
            'kode' => 'required',
            'nama' => 'required',
            'idjenjang' => 'required',
            'tglsk' => 'required',
            'akreditasi' => 'required',
        ]);

        $prodi = prodiModel::find($id);

        $prodi->update([
            'idfak' => $request->idfak,
            'kode' => $request->kode,
            'nama' => $request->nama,
            'idjenjang' => $request->idjenjang,
            'tglsk' => $request->tglsk,
            'akreditasi' => $request->akreditasi,
        ]);

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $prodi = prodiModel::find($id);
        $prodi->delete();

        return redirect()->route('prodi.index')->with('success', 'Data prodi berhasil dihapus');
    }
}
