<!-- resources/views/dosen/create.blade.php -->
@extends('layouts.app')

@section('content')
<h2>Tambah Dosen</h2>

<form action="{{ route('dosen.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Nama Dosen</label>
        <input type="text" name="nama_dosen" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>NIDN</label>
        <input type="text" name="nidn" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>ID User</label>
        <input type="number" name="id_user" class="form-control" required>
    </div>
    <div class="mt-3">
    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
  </div>
</form>
@endsection
