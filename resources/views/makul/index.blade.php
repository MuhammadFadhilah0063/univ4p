@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data Mata Kuliah
                        <a href="/makul/create" class="btn btn-md btn-success float-right">Tambah Data</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <tr>
                                    <th>NO.</th>
                                    <th>KODE MAKUL</th>
                                    <th>NAMA MAKUL</th>
                                    <th>SKS</th>
                                    <th>AKSI</th>
                                </tr>

                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->kode_makul }}</td>
                                        <td>{{ $d->nama_makul }}</td>
                                        <td>{{ $d->sks }}</td>
                                        <td>
                                            <a href="/makul/{{ $d->id }}/edit"
                                                class="btn btn-md btn-primary">Edit</a>
                                            <form action="/makul/{{ $d->id }}" id="delete-user-form" method="post" class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-md btn-danger" id="delete"
                                                    onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
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
