@extends('layout.master')
@section('title','Seleksi Pelamar dan Terima Interview')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Terima atau Tidak Terima</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/interview/edit{{$interview -> id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                  <label for="inputCity" class="form-label">Nomor Pendaftar</label>
                  <a {{ $interview ->id_pelamar}}></a>
                </div>
                <div class="form-group">
                    <label for="inputCity" class="form-label">Jabatan</label>
                    <a {{ $interview->jabatans->nama_jabatan}}></a>
                </div>
                <p></p>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pelamar</label>
                  <a {{ $interview ->nama_lengkap }}></a>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Seleksi</label>
                    <div class="dropdown">
                      <select name="keterangan" class="form-control">
                        <option value="Sedang Proses">Sedang Proses</option>
                        <option value="Lulus">Lulus</option>
                        <option value="Tidak Lulus">Tidak Lulus</option>
                      </select>
                      @error('keterangan')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    <label for="exampleInputEmail1">Jadwal Interview</label>
                    </div>
                    <div>
                    <input type="date" id="birthdaytime" name="jadwal_interview">
                    </div>
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection