@extends('layout.master')
@section('title','Tambah Jabatan')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Tambah Jabatan untuk Calon Pegawai</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/jabatan/insert" method="POST">
            @csrf
            <div class="card-body">
                <div class="col-md-6">
                  <label for="inputCity" class="form-label">Kode Jabatan</label> 
                  <input type="text" name="kode_jabatan" class="form-control" id="inputCity" placeholder="Masukan Kode Jabatan">
                </div>
                <p></p>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Jabatan</label>
                  <input type="text" name="nama_jabatan" class="form-control" id="exampleInputEmail1" placeholder="Masukan Nama Jabatan" >
                </div>
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
                  <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Deskripsi atau syarat Jabatan"></textarea>
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