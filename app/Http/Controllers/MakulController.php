<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;
use Alert;


class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::OrderBY('id', 'desc')->paginate(6);

        return view('makul.index', compact('makul'));
    }

    public function create()
    {

        return view('makul.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kd_makul' => 'required|min:5',
            'nama_makul' => 'required',
            'sks' => 'required|max:1'
        ]);

        // cara mass asignable
        Makul::create([
            'kd_makul' => $request->kd_makul,
            'nama_makul' => $request->nama_makul,
            'sks' => $request->sks
        ]);

        alert('Sukses', 'Simpan Data Berhasil', 'success');
        return redirect('/makul');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $makul = Makul::find($id);

        return view('makul.edit', compact('makul'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kd_makul' => 'required|min:5',
            'nama_makul' => 'required',
            'sks' => 'required|max:1'
        ]);

        // cara mass asignable
        Makul::find($id)->update([
            'kd_makul' => $request->kd_makul,
            'nama_makul' => $request->nama_makul,
            'sks' => $request->sks
        ]);

        alert('Sukses', 'Edit Data Berhasil', 'success');
        return redirect('/makul');
    }

    public function destroy($id)
    {
        Makul::find($id)->delete();

        return redirect('/makul')->with('success', 'User deleted successfully');
    }
}
