<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = Mahasiswa::OrderBY('id', 'desc')->paginate(5);
        $page = ['page' => 'mahasiswa'];

        return view('mahasiswa.index', compact('data', 'page'));
    }

    // public function create()
    // {
    //     return view('makul.create');
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'kode_makul' => 'required|min:5',
    //         'nama_makul' => 'required',
    //         'sks' => 'required|max:1'
    //     ]);

    //     // cara mass asignable
    //     Makul::create([
    //         'kode_makul' => $request->kode_makul,
    //         'nama_makul' => $request->nama_makul,
    //         'sks' => $request->sks
    //     ]);

    //     alert('Sukses', 'Simpan Data Berhasil', 'success');
    //     return redirect('/makul');
    // }

    // public function show($id)
    // {
    //     //
    // }

    // public function edit($id)
    // {
    //     $data = Makul::find($id);

    //     return view('makul.edit', compact('data'));
    // }

    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'kode_makul' => 'required|min:5',
    //         'nama_makul' => 'required',
    //         'sks' => 'required|max:1'
    //     ]);

    //     // cara mass asignable
    //     Makul::find($id)->update([
    //         'kode_makul' => $request->kode_makul,
    //         'nama_makul' => $request->nama_makul,
    //         'sks' => $request->sks
    //     ]);

    //     alert('Sukses', 'Edit Data Berhasil', 'success');

    //     return redirect('/makul');
    // }

    // public function destroy($id)
    // {
    //     Makul::find($id)->delete();

    //     toast('Data berhasil dihapus!', 'success');
    //     return redirect('/makul')->with('success', 'User deleted successfully');
    // }
}
