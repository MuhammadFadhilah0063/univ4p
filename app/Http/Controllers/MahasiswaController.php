<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use App\User;
use Illuminate\Http\Request;
use Alert;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        $user = User::all();

        return view('mahasiswa.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'npm' => 'required|max:8',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telepon' => 'required|max:15',
            'alamat' => 'required|max:30'
        ]);

        // cara mass asignable
        Mahasiswa::create([
            'user_id' => $request->user_id,
            'npm' => $request->npm,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ]);

        alert('Sukses', 'Simpan Data Berhasil', 'success');
        return redirect('/mahasiswa');
    }

    public function show($id)
    {

    }

    public function edit($id)
    {
        $user = User::all();
        $mahasiswa = Mahasiswa::find($id);

        return view('mahasiswa.edit', compact('mahasiswa', 'user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'npm' => 'required|max:8',
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required',
            'telepon' => 'required|max:15',
            'alamat' => 'required|max:30'
        ]);

        // cara mass asignable
        Mahasiswa::find($id)->update([
            'user_id' => $request->user_id,
            'npm' => $request->npm,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'gender' => $request->gender,
            'telepon' => $request->telepon,
            'alamat' => $request->alamat
        ]);

        alert('Sukses', 'Edit Data Berhasil', 'success');
        return redirect('/mahasiswa');
    }

    public function destroy($id)
    {
        Mahasiswa::find($id)->delete();

        return redirect('/mahasiswa')->with('success', 'User deleted successfully');
    }
}
