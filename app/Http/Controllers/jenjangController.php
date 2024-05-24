<?php

namespace App\Http\Controllers;

use App\Models\jenjangModel;
use Illuminate\Http\Request;



class jenjangController extends Controller
{
    public function index()
    {
        // $jenjang = jenjangModel::take(5)->get();
        // $jenjang = jenjangModel::orderBy('id')->paginate(4);
        // $jenjang = jenjangModel::all();


        $jenjang = jenjangModel::paginate(5);
        
        $page = $jenjang->currentPage();

        
        return view('jenjang.list', compact('jenjang', 'page'))
            ->with('title', 'Jenjang')
            ->with('judul', 'DAFTAR JENJANG');
    }

    public function create()
    {
        return view('jenjang.form')
            ->with('title', 'Form')
            ->with('judul', 'FORM JENJANG');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',

        ]);

        jenjangModel::create([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenjang.index')->with('success', 'Data jenjang berhasil ditambahkan');
    }

    public function show($id)
    {
        $jenjang = jenjangModel::findOrFail($id);


        return view('jenjang.formedit', compact('jenjang'))
            ->with('title', 'Form Edit')
            ->with('judul', 'FORM EDIT JENJANG');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $jenjang = jenjangModel::findOrFail($id);
        $jenjang->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('jenjang.index')->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jenjang = jenjangModel::findOrFail($id);
        $jenjang->delete();

        return redirect()->route('jenjang.index')->with('success', 'Data berhasil dihapus');
    }
}
