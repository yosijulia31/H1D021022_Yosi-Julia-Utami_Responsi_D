<?php

namespace App\Http\Controllers;

use App\Models\KategoriTransaksi;
use Illuminate\Http\Request;

class KategoriTransaksiController extends Controller
{
    // Fungsi untuk mengambil semua kategori transaksi
    public function index() {
        return KategoriTransaksi::all();
    }

    // Fungsi untuk menambah data kategori transaksi
    public function store(Request $request) {
        $data = $request->validate([
            'transaction' => 'required|string',
            'type' => 'required|string',
            'amount' => 'required|integer',
        ]);

        return KategoriTransaksi::create($data);
    }

    // Fungsi untuk mengupdate data
    public function update(Request $request, $id) {
        $kategori = KategoriTransaksi::findOrFail($id);
        $data = $request->validate([
            'transaction' => 'string',
            'type' => 'string',
            'amount' => 'integer',
        ]);

        $kategori->update($data);
        return $kategori;
    }

    // Fungsi untuk menghapus data
    public function destroy($id) {
        KategoriTransaksi::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted successfully']);
    }
}

