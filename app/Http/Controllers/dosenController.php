<?php

namespace App\Http\Controllers;

use App\Models\dosenModel;
use Illuminate\Http\Request;

class dosenController extends Controller
{
    public function index(Request $request)
    {
        // $dosen = dosenModel::all();

        // $dosen = dosenModel::where('jk', 'Laki-laki')->paginate(5);
        // $dosen = dosenModel::paginate(5);
        $search = $request->input('search');
        $dosen = dosenModel::when($search, function ($query, $search) {
            return $query->where('nidn', 'LIKE', '%' . $search . '%')
                ->orWhere('nama', 'LIKE', '%' . $search . '%');
        })->paginate(5);


        $page = $dosen->currentPage();


        return view('dosen.list', compact('dosen', 'page'))
            ->with('title', 'Dosen')
            ->with('judul', 'DAFTAR DOSEN');
    }

    public function create()
    {
        return view('dosen.form')
            ->with('title', 'Form')
            ->with('judul', 'FORM DOSEN');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nidn' => 'required|unique:dosen',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ], [
            'nidn.unique' => 'Nidn Sudah terdaftar.',
        ]);

        dosenModel::create([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data dosen berhasil ditambahkan');
    }

    public function show($id)
    {
        $dosen = dosenModel::findOrFail($id);

        return view('dosen.formedit', compact('dosen'))
            ->with('title', 'Form Edit')
            ->with('judul', 'FORM EDIT DOSEN');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nidn' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'telp' => 'required',
        ]);

        $dosen = dosenModel::findOrFail($id);
        $dosen->update([
            'nidn' => $request->nidn,
            'nama' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'telp' => $request->telp,
        ]);

        return redirect()->route('dosen.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $dosen = dosenModel::findOrFail($id);
        $dosen->delete();

        return redirect()->route('dosen.index')->with('success', 'Data berhasil dihapus');
    }
}
