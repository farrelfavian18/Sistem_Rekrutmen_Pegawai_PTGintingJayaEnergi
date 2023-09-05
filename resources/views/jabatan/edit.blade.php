@extends('layout.master')
@section('title','Ubah Jabatan')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Edit/Ubah Jabatan untuk Pelamar</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/jabatan/edit{{$jabatan -> id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                  <label for="inputCity" class="form-label">Kode Jabatan</label>
                  <input type="number" name="kode_jabatan" class="form-control" id="inputCity" placeholder="Masukan Kode Jabatan" value={{ $jabatan ->kode_jabatan }}>
                </div>
                <p></p>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Jabatan</label>
                  <input type="text" name="nama_jabatan" class="form-control" placeholder="Masukan Nama Jabatan" value={{ $jabatan ->nama_jabatan }}>
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Deskripsi atau syarat Jabatan" value={{ $jabatan ->deskripsi}}></textarea>
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