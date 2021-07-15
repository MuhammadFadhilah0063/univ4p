@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA MAHASISWA
                        <a href="/makul/create" class="btn btn-md btn-success float-right">Tambah Data Mahasiswa</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>NO.</th>
                                    <th>NPM</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>TEMPAT, TANGGAL LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>TELEPON</th>
                                    <th>ALAMAT</th>
                                    <th>AKSI</th>
                                </tr>

                                <?php $no = 1 ?>
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $d->npm }}</td>
                                        <td>no name</td>
                                        <td>{{ $d->tempat_lahir }}, {{ $d->tgl_lahir }}</td>
                                        <td>{{ $d->gender }}</td>
                                        <td>{{ $d->telepon }}</td>
                                        <td>{{ $d->alamat }}</td>
                                        <td>
                                            <a href="/mahasiswa/{{ $d->id }}/edit"
                                                class="btn btn-md btn-primary">Edit</a>
                                            <form action="/mahasiswa/{{ $d->id }}" id="delete-user-form" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-md btn-danger" id="delete">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
