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
        $page = 'makul';

        return view('makul.index', compact('makul', 'page'));
    }

    public function create()
    {
        $page = 'makul';

        return view('makul.create', compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_makul' => 'required|min:5',
            'nama_makul' => 'required',
            'sks' => 'required|max:1'
        ]);

        // cara mass asignable
        Makul::create([
            'kode_makul' => $request->kode_makul,
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
        $page = 'makul';

        return view('makul.edit', compact('makul', 'page'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_makul' => 'required|min:5',
            'nama_makul' => 'required',
            'sks' => 'required|max:1'
        ]);

        // cara mass asignable
        Makul::find($id)->update([
            'kode_makul' => $request->kode_makul,
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
