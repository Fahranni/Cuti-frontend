@extends('layouts.app')
@section('content')
<h2>Edit Mahasiswa</h2>
@if(session('error'))<div class="alert alert-danger">{{ session('error') }}</div>@endif
<form action="{{ route('mahasiswa.update', $mahasiswa['npm']) }}" method="POST">
  @csrf @method('PUT')
  @foreach (['npm','id_user','id_dosen','id_kajur','nama_mahasiswa','tempat_tanggal_lahir','jenis_kelamin','alamat','agama','angkatan','program_studi','semester','no_hp','email'] as $field)
    <div class="mb-2">
      <label>{{ ucwords(str_replace('_',' ',$field)) }}</label>
      <input type="{{ $field=='email'?'email':'text' }}" name="{{ $field }}" value="{{ $mahasiswa[$field] }}" class="form-control" required>
    </div>
  @endforeach
  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
