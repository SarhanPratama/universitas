<?php

namespace App\Http\Controllers;

use App\Models\dosenModel;
use App\Models\hariModel;
use App\Models\jadwalModel;
use App\Models\kelasModel;
use App\Models\matkulModel;
use App\Models\ruangModel;
use App\Models\tahunAkademikModel;
use Illuminate\Http\Request;

class jadwalController extends Controller
{
    public function index(Request $request)
    {
        
        // $jadwal = jadwalModel::all();
        // $jadwal = jadwalModel::with(['tahunakademik', 'dosen', 'hari', 'kelas', 'ruang', 'matkul'])->get();
        // $jadwal = jadwalModel::paginate(5);

        $search = $request->input('search');
        $jadwal = jadwalModel::when($search, function ($query, $search) {
            return $query->whereHas('matkul', function ($subquery) use ($search) {
                $subquery->where('nama', 'LIKE', '%' . $search . '%');
            })->orWhereHas('tahunakademik', function ($subquery) use ($search) {
                $subquery->where('nama', 'LIKE', '%' . $search . '%');
            });
        })->paginate(5);


        $page = $jadwal->currentPage();

        return view('jadwal.list', compact('jadwal', 'page'))
            ->with('title', 'Jadwal')
            ->with('judul', 'DAFTAR JADWAL');
    }

    public function create()
    {
        $jadwal = jadwalModel::with(['tahunakademik','dosen','hari','kelas','ruang','matkul'])->get();

        // $tahunakademik = tahunAkademikModel::all();
        // $dosen = dosenModel::all();
        // $hari = hariModel::all();
        // $kelas = kelasModel::all();
        // $ruang = ruangModel::all();
        // $matkul = matkulModel::all();

        return view('jadwal.form', compact('jadwal'))
            ->with('title', 'Form Jadwal' )
            ->with('judul', 'FORM JADWAL');
            // tahunakademik','dosen', 'hari','kelas','ruang','matkul
            // compact('jadwal')
    }
    public function store(Request $request)
    {
        $request->validate([
            'idta' => 'required',
            'iddosen' => 'required',
            'idhari' => 'required',
            'idkelas' => 'required',
            'idruang' => 'required',
            'idmatkul' => 'required|unique:jadwal',
            'masuk' => 'required',
            'keluar' => 'required',
        ], [
            'idmatkul.unique' => 'Matakuliah Sudah terdaftar.',
        ]);

        jadwalModel::create([
            'idta' => $request->idta,
            'iddosen' => $request->iddosen,
            'idhari' => $request->idhari,
            'idkelas' => $request->idkelas,
            'idruang' => $request->idruang,
            'idmatkul' => $request->idmatkul,
            'masuk' => $request->masuk,
            'keluar' => $request->keluar,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal berhasil ditambahkan');
    }

    public function show($id)
    {
        $jadwal = jadwalModel::find($id);
        $tahunakademik = tahunAkademikModel::all();
        $dosen = dosenModel::all();
        $hari = hariModel::all();
        $kelas = kelasModel::all();
        $ruang = ruangModel::all();
        $matkul = matkulModel::all();

        return view('jadwal.formedit', compact('jadwal','tahunakademik','dosen', 'hari','kelas','ruang','matkul'))
            ->with('title', 'Form Edit Jadwal')
            ->with('judul', 'FORM EDIT JADWAL');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'idta' => 'required',
            'iddosen' => 'required',
            'idhari' => 'required',
            'idkelas' => 'required',
            'idmatkul' => 'required|unique:jadwal,idmatkul,'.$id,
            'idruang' => 'required',
            'masuk' => 'required',
            'keluar' => 'required',
        ],[
            'idmatkul.unique' => 'Matakuliah Sudah terdaftar.',
        ]);

        $jadwal = jadwalModel::find($id);

        $jadwal->update([
            'idta' => $request->idta,
            'iddosen' => $request->iddosen,
            'idhari' => $request->idhari,
            'idkelas' => $request->idkelas,
            'idruang' => $request->idruang,
            'idmatkul' => $request->idmatkul,
            'masuk' => $request->masuk,
            'keluar' => $request->keluar,
        ]);

        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $jadwal = jadwalModel::find($id);
        $jadwal->delete();

        return redirect()->route('jadwal.index')->with('success', 'Data Jadwal berhasil dihapus');
    }
}
