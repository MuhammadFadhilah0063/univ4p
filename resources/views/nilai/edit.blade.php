@extends('layouts.app')

@section('content')
{{-- {{ dd($makul) }} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        EDIT DATA NILAI MAHASISWA
                    </div>

                    <div class="card-body">
                        <form action="/nilai/{{ $nilai->id }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col">
                                    <label for="user_id" class="form-label">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disabled>--Pilih User--</option>
                                        @foreach ($user as $u)
                                            <option value="{{ $u->id }}" {{ $nilai->user_id == $u->id ? "selected" : "" }}>{{ $u->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label for="makul_id" class="form-label">Nama Matakuliah</label>
                                    <select name="makul_id" id="makul_id" class="form-control">
                                        <option value="" disabled>--Pilih Makul--</option>
                                        @foreach ($makul as $m)
                                            <option value="{{ $m->id }}" {{ $nilai->makul_id == $m->id ? "selected" : "" }}>{{ $m->nama_makul }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label for="nilai" class="form-label">Nilai</label>
                                    <input type="number" class="form-control" id="nilai" name="nilai"
                                        placeholder="70" value="{{ (old('nilai')) ? old('nilai') : $nilai->nilai}}">
                                    @error('nilai')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row float-right">
                                <div class="col-12 mt-3">
                                    <a href="/nilai" class="btn btn-md btn-success">KEMBALI</a>
                                    <button type="submit" class="btn btn-primary btn-md full-width">SIMPAN</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
