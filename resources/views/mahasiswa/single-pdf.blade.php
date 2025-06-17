<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Detail Mahasiswa</title>
    <style>
        body { font-family: sans-serif; font-size: 12px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        td { padding: 6px; border-bottom: 1px solid #ddd; }
    </style>
</head>
<body>
    <h2>Detail Mahasiswa</h2>
    <table>
        <tr><td><strong>NPM</strong></td><td>{{ $mahasiswa['npm'] }}</td></tr>
        <tr><td><strong>Nama</strong></td><td>{{ $mahasiswa['nama_mahasiswa'] }}</td></tr>
        <tr><td><strong>Tempat & Tanggal Lahir</strong></td><td>{{ $mahasiswa['tempat_tanggal_lahir'] }}</td></tr>
        <tr><td><strong>Jenis Kelamin</strong></td><td>{{ $mahasiswa['jenis_kelamin'] }}</td></tr>
        <tr><td><strong>Alamat</strong></td><td>{{ $mahasiswa['alamat'] }}</td></tr>
        <tr><td><strong>Agama</strong></td><td>{{ $mahasiswa['agama'] }}</td></tr>
        <tr><td><strong>Angkatan</strong></td><td>{{ $mahasiswa['angkatan'] }}</td></tr>
        <tr><td><strong>Program Studi</strong></td><td>{{ $mahasiswa['program_studi'] }}</td></tr>
        <tr><td><strong>Semester</strong></td><td>{{ $mahasiswa['semester'] }}</td></tr>
        <tr><td><strong>No HP</strong></td><td>{{ $mahasiswa['no_hp'] }}</td></tr>
        <tr><td><strong>Email</strong></td><td>{{ $mahasiswa['email'] }}</td></tr>
    </table>
</body>
</html>
