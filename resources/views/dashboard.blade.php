@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Dashboard</h2>
    <div class="row mt-4">
        <div class="col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Mahasiswa</h5>
                    <p class="card-text fs-4">{{ $jumlah_mahasiswa }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-body">
                    <h5 class="card-title">Total Dosen</h5>
                    <p class="card-text fs-4">{{ $jumlah_dosen }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
