@extends('layout.master')
@section('title','List Jabatan')
@section('content')

<!-- /.card -->
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title" >Jabatan yang tersedia pada PT Ginting Jaya Energi Tbk , beserta syaratnya</h3>
    </div>
    <div>
      @if ($message = Session::get('success'))
          <div class="alert alert-success" role="alert">
            {{ $message }}
          </div>
        @endif
    </div>
    <!-- /.card-header -->
    <div class="card-body text-left">
      <table id="example2" class="table table-bordered table-striped">
        <thead>
        <tr>
          <th>No.</th>
          <th>KodeJabatan</th>
          <th>Jabatan</th>
          <th>Deskripsi /  Syarat</th>
          @if (Auth::check() && Auth::user()->role == '1')
          <th>Dibuat</th>
          <th>Diubah</th>
          <th>Aksi</th>
          @endif
        </tr>
        </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
          @foreach ($jabatan as $item)
          <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $item->kode_jabatan }}</td>
            <td>{{ $item->nama_jabatan }}</td>
            <td>{{ $item->deskripsi }}</td>
            @if (Auth::check() && Auth::user()->role == '1')
            <td>{{ $item->created_at}}</td>
            {{-- <td>{{ $item->created_at->diffForHumans() }}</td> --}}
            <td>{{ $item->updated_at}}</td>
            {{-- <td>{{ $item->updated_at->diffForHumans() }}</td> --}}
            @endif
          </td>
          @if (Auth::check() && Auth::user()->role == '1')
          <td class="project-actions">
              <a class="btn btn-info btn-sm" href="/jabatan/show/{{$item->id}}">
                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
              </a>
              <a class="btn btn-danger btn-sm" href="jabatan/delete{{$item->id}}">
                  <i class="fas fa-trash">
                  </i>
                  Delete
              </a>
          </td>
          </tr>
          @endif
          @endforeach
          @if (Auth::check() && Auth::user()->role == '1')
        <a href ="{{url('/jabatan/create')}}" class="btn btn-success">Tambah Jabatan +</a>
        </tfoot>
          @endif
      </table>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection