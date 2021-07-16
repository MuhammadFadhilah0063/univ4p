@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        EDIT DATA MAHASISWA
                    </div>

                    <div class="card-body">
                        <form action="/mahasiswa/{{ $mahasiswa->id }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col">
                                    <label for="user_id" class="form-label">Nama Mahasiswa</label>
                                    <select name="user_id" id="user_id" class="form-control">
                                        <option value="" disabled>--Pilih User--</option>
                                        @foreach ($user as $u)
                                            <option value="{{ $u->id }}" {{ $mahasiswa->user_id == $u->id ? "selected" : "" }}>{{ $u->name }}</option>
                                        @endforeach
                                    </select>

                                </div>

                                <div class="col">
                                    <label for="npm" class="form-label">NPM</label>
                                    <input type="number" class="form-control" id="npm" name="npm" placeholder="19630000"
                                        value="{{ old('npm') ? old('npm') : $mahasiswa->npm }}" maxlength="8">
                                    @error('npm')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir"
                                        placeholder="Banjarmasin" value="{{ old('tempat_lahir') ? old('tempat_lahir') : $mahasiswa->tempat_lahir }}">
                                    @error('tempat_lahir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col">
                                    <label for="tgl_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                        value="{{ old('tgl_lahir') ? old('tgl_lahir') : $mahasiswa->tgl_lahir }}">
                                    @error('tgl_lahir')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="gender" class="form-label">Jenis Kelamin</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="" disabled>--Pilih Jenis Kelamin--</option>
                                        <option value="L" {{ $mahasiswa->gender == 'L' ? "selected" : "" }}>Laki-laki</option>
                                        <option value="P" {{ $mahasiswa->gender == 'P' ? "selected" : "" }}>Perempuan</option>
                                    </select>
                                </div>

                                <div class="col">
                                    <label for="telepon" class="form-label">Telepon</label>
                                    <input type="number" class="form-control" id="telepon" name="telepon"
                                        placeholder="0813212345" value="{{ old('telepon') ? old('telepon') : $mahasiswa->telepon }}">
                                    @error('telepon')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="col my-3">
                                    <label for="alamat" class="form-label">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="alamat"
                                        rows="3">{{ old('alamat') ? old('alamat') : $mahasiswa->alamat }}</textarea>
                                    @error('alamat')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row float-right">
                                <div class="col-12 mt-3">
                                    <a href="/mahasiswa" class="btn btn-md btn-success">KEMBALI</a>
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
