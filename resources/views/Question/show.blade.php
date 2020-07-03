@extends('adminlte.master')

@section('title', 'Detail Pertanyaan')
@section('content')
@if (session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
    <div class="card">
        <h5 class="card-header">#{{ $question->id }}.	&nbsp; <a href="/jawaban/{{ $question->id }}">{{ $question->judul }}</a><a href="/pertanyaan/{{ $question->id }}/edit" class="btn-sm btn-success ml-auto" data-toggle="tooltip" data-placement="top" title="Ubah" ><i class="fa fa-edit" aria-hidden="true"></i></a></h5>
        <div class="card-body">
        <p class="card-text">{{ $question->isi }}</p>
    </div>
    <div class="card-footer text-muted">
        <span>Tanggal dibuat : {{ $question->created_at }}</span>
        <span class="float-right">Tanggal diperbaharui : {{ $question->updated_at }}</span>
    </div>
</div>
<a href="/jawaban/{{ $question->id }}" class="btn btn-primary">Jawab</a>
<a href="/pertanyaan" class="btn btn-default">Kembali</a>

@endsection