<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

/**
 * Summary of BiodataController
 */
class BiodataController extends Controller
{
    public function create()
    {
        return view('biodata.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
        ]);

        // Simpan data dalam sesi
        session(['biodata' => $data]);

        return redirect('/biodata')->with('success', 'Biodata berhasil disimpan');
    }
}
