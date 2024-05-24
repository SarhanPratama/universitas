<?php

namespace App\Http\Controllers;

use App\Models\tahunAkademikModel;
use Illuminate\Http\Request;

class tahunAkademikController extends Controller
{

    public function index(Request $request)
    {
        $search = $request->input('search');
        $tahunakademik = tahunAkademikModel::when($search, function ($query, $search) {
        return $query->where('kode', 'LIKE', '%' . $search . '%')
        ->orWhere('nama', 'LIKE', '%' . $search . '%');
        })->paginate(5);


        $page = $tahunakademik->currentPage();

        return view('tahun_akademik.list', compact('tahunakademik', 'page'))
            ->with('title', 'Tahun Akademik')
            ->with('judul', 'DAFTAR TAHUN AKADEMIK');
    }

    public function create()
    {
        return view('tahun_akademik.form')
            ->with('title', 'Form')
            ->with('judul', 'FORM TAHUN AKADEMIK');
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'kode' => 'required|unique:tahun_akademik',
                'nama' => 'required',
            ],
            [
                'kode.unique' => 'Kode sudah terdaftar.',

                'kode' => 'Kode wajib di isi.',
                'nama' => 'Nama wajib di isi.',
            ]
        );

        tahunAkademikModel::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('tahun_akademik.index')->with('message', 'Data Tahun Akademik berhasil ditambahkan');
    }

    public function show($id)
    {
        $tahunakademik = tahunAkademikModel::findOrFail($id);

        return view('tahun_akademik.formedit', compact('tahunakademik'))
            ->with('title', 'Form Edit')
            ->with('judul', 'FORM EDIT TAHUN AKADEMIK');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode' => 'required',
            'nama' => 'required',
        ]);

        $tahunakademik = tahunAkademikModel::findOrFail($id);
        $tahunakademik->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
        ]);

        return redirect()->route('tahun_akademik.index')
            // ->with('success', 'Data berhasil diperbarui')
            ->with('message', 'Data Tahun Akademik berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $tahunakademik = tahunAkademikModel::findOrFail($id);

        $tahunakademik->delete();


        return redirect()->route('tahun_akademik.index')->with('success', 'Data berhasil dihapus');
    }
}
