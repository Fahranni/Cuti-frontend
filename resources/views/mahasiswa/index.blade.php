@extends('layouts.app')
@section('content')
<h2>Daftar Mahasiswa</h2>
@if(session('success')) <div class="alert alert-success">{{ session('success') }}</div> @endif
<a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>
<table class="table table-bordered">
<thead>
  <tr><th>NPM</th><th>Nama</th><th>Program Studi</th><th>Aksi</th></tr>
</thead>
<tbody>
  @foreach($mahasiswa as $m)
  <tr>
    <td>{{ $m['npm'] }}</td>
    <td>{{ $m['nama_mahasiswa'] }}</td>
    <td>{{ $m['program_studi'] }}</td>
    <td>
      <a href="{{ route('mahasiswa.edit', $m['npm']) }}" class="btn btn-warning btn-sm">Edit</a>
      <form action="{{ route('mahasiswa.destroy', $m['npm']) }}" method="POST" class="d-inline">
        @csrf @method('DELETE')
        <button onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</button>
      </form>
     <a href="{{ route('mahasiswa.download.pdf', $m['npm']) }}" class="btn btn-sm btn-info">Unduh PDF</a>


    </td>
  </tr>
  @endforeach
</tbody>
</table>
@endsection
