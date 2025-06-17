<!-- resources/views/dosen/index.blade.php -->
@extends('layouts.app')

@section('content')
<h2>Daftar Dosen</h2>
<a href="{{ route('dosen.create') }}" class="btn btn-primary mb-3">Tambah Dosen</a>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Dosen</th>
            <th>NIDN</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($dosen as $item)
        <tr>
            <td>{{ $item['id_dosen'] }}</td>
            <td>{{ $item['nama_dosen'] }}</td>
            <td>{{ $item['nidn'] }}</td>
            <td>
                <a href="{{ route('dosen.edit', $item['id_dosen']) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('dosen.destroy', $item['id_dosen']) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin hapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
