@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA MAHASISWA
                        <a href="/mahasiswa/create" class="btn btn-md btn-success float-right">Tambah Data Mahasiswa</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-hover">
                                <tr class="bg-dark text-white">
                                    <th>NO.</th>
                                    <th>NPM</th>
                                    <th>NAMA LENGKAP</th>
                                    <th>TEMPAT, TANGGAL LAHIR</th>
                                    <th>JENIS KELAMIN</th>
                                    <th>TELEPON</th>
                                    <th>ALAMAT</th>
                                    <th>AKSI</th>
                                </tr>

                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($mahasiswa as $mhs)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $mhs->npm }}</td>
                                        <td>{{ $mhs->user->name }}</td>
                                        <td>{{ $mhs->tempat_lahir }}, {{ $mhs->tgl_lahir }}</td>
                                        <td>{{ $mhs->gender }}</td>
                                        <td>{{ $mhs->telepon }}</td>
                                        <td>{{ $mhs->alamat }}</td>
                                        <td>
                                            <a href="/mahasiswa/{{ $mhs->id }}/edit"
                                                class="btn btn-md btn-primary">Edit</a>
                                            <form action="/mahasiswa/{{ $mhs->id }}" method="post" id="delete-form"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-md btn-danger delete" id="delete">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>

                        <nav aria-label="Page navigation example">
                            <div class="pagination justify-content-center">
                                {{ $mahasiswa->links() }}
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
