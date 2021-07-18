@extends('layouts.app')

@section('content')
    {{-- {{ dd($nilai->nama_makul) }} --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        DATA NILAI MAHASISWA
                        <a href="/nilai/create" class="btn btn-md btn-success float-right">Tambah Data Nilai</a>
                    </div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered text-center table-hover">
                                <tr class="bg-dark text-white">
                                    <th>NO.</th>
                                    <th>NPM</th>
                                    <th>NAMA MAHASISWA</th>
                                    <th>NAMA MATKUL</th>
                                    <th>SKS</th>
                                    <th>NILAI</th>
                                    <th>AKSI</th>
                                </tr>

                                @php
                                    $no = 1;
                                @endphp
                                @foreach ($nilai as $n)
                                    <tr>
                                        <td>{{ $no++ }}</td>
                                        <td>{{ $n->mahasiswa->npm }}</td>
                                        <td>{{ $n->mahasiswa->user->name }}</td>
                                        <td>{{ $n->makul->nama_makul }}</td>
                                        <td>{{ $n->makul->sks }}</td>
                                        <td>{{ $n->nilai }}</td>
                                        <td>
                                            <a href="/nilai/{{ $n->id }}/edit"
                                                class="btn btn-md btn-primary">Edit</a>
                                            <form action="/nilai/{{ $n->id }}" method="post" id="delete-form"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button class="btn btn-md btn-danger delete" id="delete">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>

                            <nav aria-label="Page navigation example">
                                <div class="pagination justify-content-center">
                                    {{ $nilai->links() }}
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
