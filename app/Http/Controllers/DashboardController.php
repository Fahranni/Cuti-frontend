<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    protected $apiMahasiswa = 'http://localhost:8080/mahasiswa';
    protected $apiDosen = 'http://localhost:8080/dosen';

    public function index()
    {
        $mahasiswa = Http::get($this->apiMahasiswa)->json();
        $dosen = Http::get($this->apiDosen)->json();

        return view('dashboard', [
            'jumlah_mahasiswa' => count($mahasiswa),
            'jumlah_dosen' => count($dosen)
        ]);
    }
}
