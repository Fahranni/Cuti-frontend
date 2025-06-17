@extends('layouts.app')

@section('content')
<h2>Edit Dosen</h2>

{{-- Tampilkan pesan error jika ada --}}
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

{{-- Tampilkan pesan sukses jika ada --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form action="{{ route('dosen.update', $dosen['id_dosen']) }}" method="POST">
    @csrf
    @method('PUT')

    {{-- Input hidden untuk id_user --}}
    <input type="hidden" name="id_user" value="{{ $dosen['id_user'] }}">

    <div class="mb-3">
        <label for="nama_dosen">Nama Dosen</label>
        <input type="text" id="nama_dosen" name="nama_dosen" class="form-control" value="{{ $dosen['nama_dosen'] }}" required>
    </div>

    <div class="mb-3">
        <label for="nidn">NIDN</label>
        <input type="text" id="nidn" name="nidn" class="form-control" value="{{ $dosen['nidn'] }}" required>
    </div>

    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Batal</a>
    </div>
</form>
@endsection
