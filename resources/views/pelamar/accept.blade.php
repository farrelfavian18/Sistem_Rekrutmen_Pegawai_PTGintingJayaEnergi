@extends('layout.master')
@section('title','Pendaftaran Berhasil')
@section('content')

<!-- /.card -->
<div class="card card-warning">
    <div class="card-header">
      <h3 class="card-title" ></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body text-left">
      <a style="color: green">Pendaftaran BERHASIL</a>,dengan No Pendaftaran&nbsp; <strong>{{$id_pelamar}}</strong>&nbsp;, silahkan menuju ke <a href="{{url('interview')}}">Tab Seleksi<a> untuk melihat update seleksi pendaftaran pegawai
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
@endsection