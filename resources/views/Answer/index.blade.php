@extends('adminlte.master')

@section('title', 'Jawaban')

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <!-- Timelime example  -->
        <div class="row">
          <div class="col-md-12">
            <!-- The time line -->
            <div class="timeline">
              <!-- timeline time label -->
              <div class="time-label">
                @foreach ($questions as $question)
                <span class="bg-red">{{ date('d-m-Y', strtotime($question->created_at))}}</span>
                @endforeach
              </div>
              <!-- /.timeline-label -->
              <!-- timeline item -->
              <div>
                <i class="fas fa-question bg-blue"></i>
                <div class="timeline-item">
                    <h3 class="timeline-header"><b>Judul : </b><a href="/pertanyaan/{{ $question->id }}">{{ $question->judul }}</a></h3>
                  <div class="timeline-body">{{ $question->isi }}</div>
                  <div class="timeline-footer">
                    <span class="time"><i class="fas fa-clock"></i> {{ $question->created_at }}</span>
                  </div>
                </div>
              </div>
              <!-- END timeline item -->
              <?php
              $i = 1;
              ?>
              @foreach ($answers as $key => $answer)
              <div>
                <i class="fas fa-comments bg-yellow"></i>
                <div class="timeline-item">
                <h3 class="timeline-header"><a href="#">jawaban {{ $i++ }}</a></h3>
                <div class="timeline-body">{{ $answer->isi }}</div>
                <div class="timeline-footer">
                    <span class="time"><i class="fas fa-clock"></i> {{ $answer->created_at }}</span>
                </div>
               </div>
             </div>
             @endforeach
              <div>
                  <i class="fas fa-clock bg-gray"></i>
              </div>
            </div>
          </div>
          <!-- /.col -->
        </div>
        {{-- form --}}
        <div class="col-md-12 mx-auto">
          <!-- general form elements disabled -->
              <div class="card card-warning">
              <div class="card-header">
                  <h3 class="card-title">Jawab Pertanyaan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <form action="/jawaban/{{ $question->id }}" method="POST" role="form">
                      @csrf
                  <div class="row">
                      <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                          <label for="isi">Isi Pertanyaan</label>
                          <textarea id="isi" name="isi" maxlength="60000" class="form-control @error('isi') is-invalid @enderror" rows="10" type="text" placeholder="isi pertanyaan ...">{{ old('isi') }}</textarea>
                          @error('isi')<div class="invalid-feedback"> {{ $message }} </div>@enderror
                          <input type="number" class="d-none" id="question_id" name="question_id" value="{{ $question->id }}">
                        </div>
                      </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Kirim</button>
                  <a href="{{ url('/pertanyaan') }}" role="button" class="btn btn-danger">Kembali</a>
                  </form>
              </div>
              <!-- /.card-body -->
              </div>
      </div>
      <!-- /.timeline -->

    </section><br>
    
@endsection