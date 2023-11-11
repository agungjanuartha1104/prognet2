<?php

namespace App\Http\Controllers;

use App\Models\data_diri;
use Illuminate\Http\Request;
use App\Models\DataDiri;

class DataDiriController extends Controller
{
    public function index()
    {
        $dataDiri = data_diri::all();
        return view('index', compact('dataDiri'));
    }

    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
        ]);

        data_diri::create($request->all());

        return redirect('data_diri');
    }

    public function edit($id)
    {
        $data = data_diri::findOrFail($id);
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required',
            'gender' => 'required',
        ]);

        $data = data_diri::findOrFail($id);
        $data->update($request->all());
        $data->save();

        return redirect('data_diri');
    }

    public function destroy($id)
    {
        $data = data_diri::findOrFail($id);
        $data->delete();

        return redirect('data_diri');
    }
}

