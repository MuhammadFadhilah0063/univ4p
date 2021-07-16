@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA MATA KULIAH
                        <a href="/makul/create" class="btn btn-md btn-success float-right">Tambah Data Makul</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-hover">
                                <tr class="bg-dark text-white">
                                    <th>NO.</th>
                                    <th>KODE MAKUL</th>
                                    <th>NAMA MAKUL</th>
                                    <th>SKS</th>
                                    <th>AKSI</th>
                                </tr>

                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($makul as $m)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $m->kode_makul }}</td>
                                        <td>{{ $m->nama_makul }}</td>
                                        <td>{{ $m->sks }}</td>
                                        <td>
                                            <a href="/makul/{{ $m->id }}/edit"
                                                class="btn btn-md btn-primary">Edit</a>
                                            <form action="/makul/{{ $m->id }}" id="delete-user-form" method="post"
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
