<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MahasiswaController extends Controller
{
     protected $api = 'http://localhost:8080/mahasiswa';

    public function index()
    {
        $mahasiswa = Http::get($this->api)->json();
        //dd($mahasiswa);
        return view('mahasiswa.index', compact('mahasiswa'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $req)
    {
        $data = $req->only([
            'npm','id_user','id_dosen','id_kajur',
            'nama_mahasiswa','tempat_tanggal_lahir','jenis_kelamin',
            'alamat','agama','angkatan','program_studi','semester',
            'no_hp','email'
        ]);

        $response = Http::withHeaders([
            'Accept'=>'application/json','Content-Type'=>'application/json'
        ])->post($this->api, $data);

        if (!$response->successful()) {
            return back()->withInput()->with('error', 'Gagal tambah: '.$response->body());
        }
        return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil ditambahkan');
    }

    public function edit($npm)
    {
        $m = Http::get("{$this->api}/{$npm}")->json();
        $mahasiswa = isset($m[0]) ? $m[0] : $m;
        return view('mahasiswa.edit', compact('mahasiswa'));
    }
public function update(Request $req, $npm)
{
    $data = $req->only([
        'npm','id_user','id_dosen','id_kajur',
        'nama_mahasiswa','tempat_tanggal_lahir','jenis_kelamin',
        'alamat','agama','angkatan','program_studi','semester',
        'no_hp','email'
    ]);

    $response = Http::withHeaders([
        'Accept'=>'application/json','Content-Type'=>'application/json'
    ])->put("{$this->api}/{$npm}", $data);

    if (!$response->successful()) {
        return back()->withInput()->with('error', 'Gagal update: '.$response->body());
    }
    return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil diupdate');
}

public function destroy($npm)
{
    Http::delete("{$this->api}/{$npm}");
    return redirect()->route('mahasiswa.index')->with('success','Mahasiswa berhasil dihapus');
}
public function downloadPdf($npm)
{
    $response = Http::get("{$this->api}/{$npm}");

    if (!$response->successful()) {
        return back()->with('error', 'Gagal mengambil data mahasiswa.');
    }

    $mahasiswa = $response->json();
    if (isset($mahasiswa[0])) {
        $mahasiswa = $mahasiswa[0]; // handle jika response berbentuk array
    }

    $pdf = Pdf::loadView('mahasiswa.single-pdf', compact('mahasiswa'));
    return $pdf->download("mahasiswa_{$mahasiswa['npm']}.pdf");
}

}
