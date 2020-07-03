@extends('adminLTE.master')

@section('title', 'Dashboard')

@section('content')
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>?</h3>

            <p>Pertanyaan</p>
          </div>
          <div class="icon">
            <i class="fas fa-question"></i>
          </div>
          <a href="/pertanyaan" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>?</h3>

            <p>Jawaban</p>
          </div>
          <div class="icon">
            <i class="fas fa-comments"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>?</h3>

            <p>Pertanyaan Terjawab</p>
          </div>
          <div class="icon">
            <i class="fa fa-check"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>?</h3>

            <p>Jawaban Dihapus</p>
          </div>
          <div class="icon">
            <i class="fas fa-trash"></i>
          </div>
          <a href="#" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>

      <h1>COMING SOON!</h1>
 @endsection