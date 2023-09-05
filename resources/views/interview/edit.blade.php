@extends('layout.master')
@section('title','Seleksi Rekrutmen dan Terima Interview')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
          <div class="card-header">
            {{-- <h3 class="card-title">Terima atau Tidak Terima Pelamar</h3> --}}
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/interview/edit{{$interview -> id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="inputCity" class="form-label">Nomor Pendaftar</label>
                        </div>
                            <div>
                                {{ $interview ->id_pelamar}}
                            </div>
                         </div>
                </div>
                <div class="form-group">
                    <label for="inputCity" class="form-label">Jabatan</label>
                        <div>
                            {{ $interview->jabatans->nama_jabatan}}
                        </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Pelamar</label>
                  <div>
                    {{ $interview ->nama_lengkap }}
                  </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Seleksi Dokumen</label>
                    <div class="dropdown">
                      <select name="seleksi_dokumen" class="form-control">
                        <option value="Sedang Proses" @selected(old('seleksi_dokumen') == "Sedang Proses")>Sedang Proses</option>
                        <option value="Lulus" @selected(old('seleksi_dokumen') == "Lulus")>Lulus</option>
                        <option value="Tidak Lulus" @selected(old('seleksi_dokumen') =="Tidak Lulus")>Tidak Lulus</option>
                      </select>
                      @error('seleksi_dokumen')
                        <div class="text-danger">{{ $message }}</div>
                      @enderror
                    </div>
                </div>
                <div class="form-group">
                    <div>
                    <label for="exampleInputEmail1">Jadwal Interview</label>
                    </div>
                    <div>
                    <input class="form-control" type="datetime-local" placeholder="Masukan Jadwal Interview" name="jadwal_interview">
                    </div>
                  </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Seleksi Rekrtumen</label>
                <div class="dropdown">
                  <select name="seleksi_rekrutmen" class="form-control">
                    <option value="Sedang Proses">Sedang Proses</option>
                    <option value="Lulus">Lulus</option>
                    <option value="Tidak Lulus">Tidak Lulus</option>
                  </select>
                  @error('seleksi_rekrutmen')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
    </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
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