@extends('layouts.app')
@section('content')
<h2>Tambah Mahasiswa</h2>
@if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
<form action="{{ route('mahasiswa.store') }}" method="POST">
  @csrf
  <div class="row">
    <div class="col-md-4"><label>NPM</label><input type="text" name="npm" class="form-control" required></div>
    <div class="col-md-4"><label>ID User</label><input type="text" name="id_user" class="form-control" required></div>
    <div class="col-md-4"><label>ID Dosen</label><input type="text" name="id_dosen" class="form-control" required></div>
  </div>
  <div class="row mt-2">
    <div class="col-md-4"><label>ID Kajur</label><input type="text" name="id_kajur" class="form-control" required></div>
    <div class="col-md-8"><label>Nama Mahasiswa</label><input type="text" name="nama_mahasiswa" class="form-control" required></div>
  </div>
  <div class="row mt-2">
    <div class="col-md-6"><label>TTL</label><input type="text" name="tempat_tanggal_lahir" class="form-control" required></div>
    <div class="col-md-6"><label>Jenis Kelamin</label><input type="text" name="jenis_kelamin" class="form-control" required></div>
  </div>
  <div class="row mt-2">
    <div class="col-md-6"><label>Alamat</label><input type="text" name="alamat" class="form-control" required></div>
    <div class="col-md-6"><label>Agama</label><input type="text" name="agama" class="form-control" required></div>
  </div>
  <div class="row mt-2">
    <div class="col-md-4"><label>Angkatan</label><input type="text" name="angkatan" class="form-control" required></div>
    <div class="col-md-4"><label>Prodi</label><input type="text" name="program_studi" class="form-control" required></div>
    <div class="col-md-4"><label>Semester</label><input type="number" name="semester" class="form-control" required></div>
  </div>
  <div class="row mt-2">
    <div class="col-md-6"><label>No HP</label><input type="text" name="no_hp" class="form-control" required></div>
    <div class="col-md-6"><label>Email</label><input type="email" name="email" class="form-control" required></div>
  </div>
  <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>
@endsection
