@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col">
                                <span class="title-header">TAMBAH DATA MAKUL</span>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="/makul" method="post">
                            @csrf

                            <div class="row">
                                <div class="col">
                                    <label for="kode_makul" class="form-label">Kode Makul</label>
                                    <input type="text" class="form-control" id="kode_makul" name="kode_makul"
                                        placeholder="MK001" value="{{ old('kode_makul') }}" autofocus>
                                    @error('kode_makul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="nama_makul" class="form-label">Nama Makul</label>
                                    <input type="text" class="form-control" id="nama_makul" name="nama_makul"
                                        placeholder="Web 1" value="{{ old('nama_makul') }}">
                                    @error('nama_makul')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="col">
                                    <label for="sks" class="form-label">SKS</label>
                                    <input type="number" class="form-control" id="sks" name="sks" placeholder="3"
                                        value="{{ old('sks') }}">
                                    @error('sks')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="row float-right">
                                <div class="col-12 mt-3">
                                    <a href="/makul" class="btn btn-md btn-success">KEMBALI</a>
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
