@extends('layout.master')
@section('title','List Pendaftar')
@section('content')

<!-- /.card -->
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Calon Pegawai PT. GINTING JAYA ENERGI</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No</th>
          <th>ID Pendaftaran</th>
          <th>Nama Lengkap</th>
          <th>Jabatan</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Umur</th>
          <th>Jenis Kelamin</th>
          <th>Alamat</th>
          <th>Pendidikan Terakhir</th>
          <th>Status</th>
          <th>Agama</th>
          <th>Email</th>
          <th>No Telp</th>
          <th>Nomor KTP</th>
          <th>Scan KTP</th>
          <th>No KK</th>
          <th>NPWP</th>
          <th>SIM</th>
          <th>Pengalaman Kerja</th>
          <th>Pengalaman Jabatan</th>
          <th>Masa Jabatan Pengalaman</th>
          <th>Pengalaman Kerja 2</th>
          <th>Pengalaman Jabatan 2</th>
          <th>Masa Jabatan Pengalaman 2</th>
          <th>Pengalaman Kerja 3</th>
          <th>Pengalaman Jabatan 3</th>
          <th>Masa Jabatan Pengalaman 3</th>
          <th>Sertifikat</th>
          <th>Masa Berlaku</th>
          <th>CV</th>
          <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
          @foreach ($pelamar as $item)
            <tr>
              <td scope = "row">{{ $no++ }}</td>
              <td>{{$item->id}}</td>
              <td>{{$item->nama_lengkap}}</td>
              <td>{{$item->jabatans->nama_jabatan == "null" ? "N/A" : $item->jabatans->nama_jabatan}}</td>
              <td>{{$item->tempat_lahir}}</td>
              <td>{{$item->tanggal_lahir}}</td>
              <td>{{$item->umur}}</td>
              <td>{{$item->jenis_kelamin}}</td>
              <td>{{$item->alamat_rumah}}</td>
              <td>{{$item->pendidikan_terakhir}}</td>
              <td>{{$item->status}}</td>
              <td>{{$item->agama}}</td>
              <td>{{$item->email}}</td>
              <td>{{$item->no_telp}}</td>
              <td>{{$item->nomor_ktp}}</td>
              <td><a href="dokumen/{{ $item->scan_ktp}}"><button class="btn btn-success" type="button">Scan KTP</button><a></td>
              <td>{{$item->no_kk}}</td>
              <td>{{$item->npwp}}</td>
              <td>{{$item->sim}}</td>
              <td>{{$item->pengalaman_kerja}}</td>
              <td>{{$item->pengalaman_jabatan}}</td>
              <td>{{$item->masa_jabatan}}</td>
              <td>{{$item->pengalaman_kerja2}}</td>
              <td>{{$item->pengalaman_jabatan2}}</td>
              <td>{{$item->masa_jabatan2}}</td>
              <td>{{$item->pengalaman_kerja3}}</td>
              <td>{{$item->pengalaman_jabatan3}}</td>
              <td>{{$item->masa_jabatan3}}</td>
              <td><a href="dokumen/{{ $item->sertifikat_migas}}"><button class="btn btn-success" type="button">Sertifikat</button><a></td>
              <td>{{$item->masa_berlaku_sertifikat}}</td>
              <td><a href="dokumen/{{ $item->cv }}"><button class="btn btn-success" type="button">CV</button><a></td>
              {{-- <td>{{$item->keterangan}}</td>
              <td>{{$item->jadwal_interview}}</td> --}}
              <td class="project-actions">
                <a class="btn btn-danger btn-sm" href="pelamar/delete{{$item->id}}">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                </a>
            </td>
              {{-- <td>{{$item->pendidikan_terakhir}}</td> --}}
            </tr>
          @endforeach
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection