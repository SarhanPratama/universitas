<?php

namespace App\Http\Controllers;

use App\Models\produkModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

class produkController extends Controller
{
    public function index()
    {

        $produk = produkModel::paginate(5);

        return view('produk.list', compact('produk'))
            ->with('title', 'Prodi')
            ->with('judul', 'DAFTAR PRODUK');

    }
}
