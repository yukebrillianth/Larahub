@extends('adminlte.master')

@section('title', 'Edit Pertanyaan')
@section('content')
    
<div class="col-md-12 mx-auto">
    <!-- general form elements disabled -->
        <div class="card card-warning">
        <div class="card-header">
            <h3 class="card-title">Edit Pertanyaan</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <form action="/pertanyaan/{{$question->id}}" method="POST" role="form">
                @csrf
                @method('PUT')
            <div class="row">
                <div class="col-sm-12">
                <!-- text input -->
                <div class="form-group">
                    <label for="judul">Judul Pertanyaan</label>
                <input id="judul" name="judul" type="text"  class="form-control @error('judul') is-invalid @enderror" value="{{old('judul')}} {{ $question->judul }}" placeholder="judul pertanyaan ...">
                    @error('judul')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                <!-- textarea -->
                <div class="form-group">
                    <label for="isi">Isi Pertanyaan</label>
                    <textarea id="isi" name="isi" class="form-control @error('isi') is-invalid @enderror" rows="10" type="text" placeholder="isi pertanyaan ...">{{ old('isi') }} {{ $question->isi }}</textarea>
                    @error('isi')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Perbarui</button>
            <a href="/pertanyaan" role="button" class="btn btn-danger">Batal</a>
            </form>
        </div>
        <!-- /.card-body -->
        </div>

@endsection