@extends('layout.master')
@section('title','Edit data Pelamar')
@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Edit data pelamar*</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="/pelamar/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror"  autofocus placeholder="Masukan Nama Lengkap" value={{ $pelamar->nama_lengkap }}>
                @error('nama_lengkap')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Jabatan yang dilamar</label>
                <div class="dropdown">
                <select name="id_jabatan" class="form-control @error('id_jabatan') is-invalid @enderror">
                  <option value="">-Pilih Jabatan-</option>
                  @foreach ($jabatan as $item )
                    <option value="{{ $item->id }}"{{ old('id_jabatan') == $item->id ?'selected':null }}>{{ $item->nama_jabatan }}</option>
                  @endforeach
                </select>
                @error('id_jabatan')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Kota Tempat Lahir</label>
                <input type="text" name="tempat_lahir" class="form-control @error('tempat_lahir') is-invalid @enderror" value={{ $pelamar ->tempat_lahir}} id="exampleInputEmail1" placeholder="Masukan nama Kota saja (Contoh : Palembang)">
              @error('tempat_lahir')
                <div class="text-danger">{{ $message }}</div>
              @enderror
              </div>
              <div class="form-group">
                <div>
                <label for="exampleInputEmail1">Tanggal lahir</label>
                </div>
                <div>
                <input type="date" id="birthdaytime" name="tanggal_lahir">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Umur</label>
                <input type="number" name="umur" class="form-control @error('umur') is-invalid @enderror" value={{ $pelamar ->umur}} id="exampleInputEmail1" placeholder="Masukan Angka (Contoh : 21)">
                @error('umur')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <p></p>
                <input type="radio" name="jenis_kelamin" value="Pria">&ensp; Pria&ensp;</a>
                <input type="radio" name="jenis_kelamin" value="Wanita">&ensp; Wanita
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Alamat Rumah</label>
                <textarea name="alamat_rumah" class="form-control @error('alamat_rumah') is-invalid @enderror" value={{ $pelamar ->alamat_rumah}} id="exampleFormControlTextarea" placeholder="Masukan Alamat Lengkap"></textarea>
                @error('alamat_rumah')
                <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label  for="exampleInputEmail1">Pendidikan Terakhir</label>
                <div class="dropdown">
                  <select name="pendidikan_terakhir" class="form-control @error('pendidikan_terakhir') is-invalid @enderror"  value={{ $pelamar ->pendidikan_terakhir}}>
                    <option value="SMA">SMA</option>
                    <option value="SMK">SMK</option>
                    <option value="STM">STM</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="D3">D3</option>
                  </select>
                  @error('pendidikan_terakhir')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Status Rumah Tangga</label>
                <div class="dropdown">
                  <select name="status" class="form-control @error('status') is-invalid @enderror"  value={{ $pelamar ->status}}>
                    <option value="menikah">Menikah</option>
                    <option value="belum_menikah">Belum Menikah</option>
                    <option value="cerai">Cerai</option>
                  </select>
                  @error('status')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor KTP (NIK)</label>
                <input type="number" name="nomor_ktp" class="form-control @error('nomor_ktp') is-invalid @enderror"  value={{ $pelamar ->nomor_ktp}} id="exampleInputEmail1" placeholder="Masukan nomor KTP dengan benar">
                  @error('nomor_ktp')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">E-Mail</label>
                <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  value={{ $pelamar ->email}} id="exampleInputEmail1" placeholder="Masukan E-mail anda">
                  @error('email')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Telpon</label>
                <input type="number" name="no_telp" class="form-control @error('no_telp') is-invalid @enderror"  value={{ $pelamar ->no_telp}} id="exampleInputEmail1" placeholder="Pastikan nomor dapat dihubungi (Disarankan menggunakan nomor WhatsApp)">
                  @error('no_telp')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor Kartu Keluarga</label>
                <input type="number" name="no_kk" class="form-control" value={{ $pelamar ->no_kk}} id="exampleInputEmail1" placeholder="Masukan nomor Kartu Keluarga">
                  {{-- @error('no_kk')
                    <div class="text-danger">{{ $message }}</div>
                  @enderror --}}
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nomor NPWP yang berlaku</label>
                <input type="text" name="npwp" class="form-control" value={{ $pelamar ->npwp}} id="exampleInputEmail1" placeholder="Masukan NPWP dengan benar">
              </div>
              {{-- <div class="form-group">
                <label for="exampleInputFile">Sertifikat</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="sertifikat" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Masukan Sertifikat Migas (size max 50mb, format PDF)</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div> --}}
              <div class="form-group">
                <label for="exampleInputFile">Sertifikat (size max 50mb, dan format PDF)</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="sertifikat_migas" id="customFile" value={{ $pelamar ->sertifikat_migas}}>
                  <label class="custom-file-label" for="customFile">Masukan Sertifikat Migas (size max 50mb, format PDF)</label>
                </div>
              </div>
              <div class="form-group">
                <div>
                  <label for="exampleInputEmail1">Masa Berlaku Sertifikat Habis</label>
                </div>
                <input type="date" id="birthdaytime" name="masa_berlaku_sertifikat" value={{ $pelamar ->masa_berlaku_sertifikat}}>
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Surat Izin Mengemudi</label>
              <div class="dropdown">
                <select name="sim" class="form-control" value={{ $pelamar ->sim}}>
                  <option value="belum_punya">Belum memiliki SIM</option>
                  <option value="sim_a">SIM A</option>
                  <option value="sim_c">SIM C</option>
                </select>
                @error('sim')
                  <div class="text-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pengalaman Kerja</label>
              <input type="text" name="pengalaman_kerja" class="form-control" id="exampleInputEmail1" placeholder="Masukan tempat anda pernah bekerja" value={{ $pelamar->pengalaman_kerja}}>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Pengalaman Jabatan</label>
              <input type="text" name="pengalaman_jabatan" class="form-control" id="exampleInputEmail1" placeholder="Masukan pengalaman jabatan anda di tempat bekerja tersebut" value={{ $pelamar ->pengalaman_jabatan}}>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Masa jabatan pengalaman</label>
              <input type="text" name="masa_jabatan" class="form-control" id="exampleInputEmail1" placeholder="Masukan berapa lama pengalaman anda pada jabatan tersebut (Contoh : 2 Tahun)" value={{ $pelamar->masa_jabatan}}>
            </div>
              {{-- <div class="form-group">
                <label for="exampleInputFile">Curriculum Vitae (CV)</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" name="cv" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div> --}}
              <div class="form-group">
                <label for="exampleInputFile">Curriculum Vitae (CV)</label>
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="cv" id="customFile" value={{ $pelamar->cv}}>
                  <label class="custom-file-label" for="customFile">Masukan CV (size max 50mb, format PDF)</label>
                </div>
              </div>
              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Demikian data yang dimasukan benar adanya dan sesuai fakta</label>
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