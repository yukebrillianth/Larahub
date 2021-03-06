@extends('adminlte.master')

@section('title', 'Pertanyaan')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    @if (session('deleted'))
        <div class="alert alert-danger">
            {{ session('deleted') }}
        </div>
    @endif
    <div class="row">
        <div class="col-12">
        <div class="card">
            <div class="card-header">
            <h3 class="card-title"><b>Pertanyaan</b></h3>

            <div class="card-tools">
                <div>
                <a href="/pertanyaan/create" role="button" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah</a>
                </div>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
            <table class="table table-hover" style="table-layout: fixed">
                <thead>
                <tr>
                    <th>No</th>
                    <th style="width: 20%">Judul</th>
                    <th style="width: 65%">Isi</th>
                    <th>Aksi</th>
                    {{-- <th>Tanggal Dibuat</th>
                    <th>Tanggal Perbaharui</th> --}}
                </tr>
                </thead>
                <tbody>
                    @foreach ($questions as $key => $question)
                <tr>
                    <td> {{ $key  + 1 }} </td>
                    <td class="text-truncate text-nowrap"> {{ $question->judul }} </td>
                    <td class="text-truncate text-nowrap"> {{ $question->isi }} </td>
                    <td class="text-nowrap">
                    <a href="pertanyaan/{{ $question->id }}" class="btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Lihat" ><i class="fa fa-eye" aria-hidden="true"></i></a>
                    <a href="pertanyaan/{{ $question->id }}/edit" class="btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="Ubah" ><i class="fa fa-edit" aria-hidden="true"></i></a>
                    <form action="/pertanyaan/{{ $question->id }}" style="display: inline" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" data-toggle="modal" data-target="#hapusModal" class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="fa fa-trash" aria-hidden="true"></i></button>
                        <!-- Modal -->
                        <div class="modal fade" id="hapusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body">
                                Apakah anda yakin untuk menghapus pertanyaan ini?
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                <button type="submit" class="btn btn-primary">Yakin</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </form>
                </td> 
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
    </div>
@endsection