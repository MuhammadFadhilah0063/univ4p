<?php

namespace App\Http\Controllers;

use App\Makul;
use App\Nilai;
use App\User;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nilai = Nilai::all();
        
        return view('nilai.index', compact('nilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::all();
        $makul = Makul::all();

        return view('nilai.create', compact('user', 'makul'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nilai' => 'required|max:3'
        ]);

        // dd($request->user_id);

        // cara mass asignable
        Nilai::create([
            'user_id' => $request->user_id,
            'makul_id' => $request->makul_id,
            'nilai' => $request->nilai
        ]);

        alert('Sukses', 'Simpan Data Berhasil', 'success');
        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);

        return view('nilai.edit', compact('makul', 'user', 'nilai'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nilai' => 'required|max:3'
        ]);

        // cara mass asignable
        Nilai::find($id)->update([
            'user_id' => $request->user_id,
            'makul_id' => $request->makul_id,
            'nilai' => $request->nilai
        ]);

        alert('Sukses', 'Edit Data Berhasil', 'success');
        return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Nilai::find($id)->delete();
    
        return redirect('/nilai');
    }
}
