<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DosenController extends Controller
{
    protected $api = 'http://localhost:8080/dosen';

    public function index()
    {
        $response = Http::get($this->api);
        $dosen = $response->json();
        return view('dosen.index', compact('dosen'));
    }

      public function create()
    {
        return view('dosen.create');
    }

    public function store(Request $request)
    {
        Http::post($this->api, $request->all());
        return redirect()->route('dosen.index');
    }

    public function edit($id)
    {
        $response = Http::get("{$this->api}/$id");
        $dosen = $response->json();
        return view('dosen.edit', compact('dosen'));
    }

   public function update(Request $request, $id)
{
    $data = [
        'nama_dosen' => $request->input('nama_dosen'),
        'nidn' => $request->input('nidn'),
        'id_user' => $request->input('id_user'),
        'id_dosen' => $id,
    ];

    $response = Http::withHeaders([
        'Accept' => 'application/json',
        'Content-Type' => 'application/json',
    ])->put("{$this->api}/$id", $data);

    if (!$response->successful()) {
        return back()->withInput()->with('error', 'Update gagal: ' . $response->body());
    }

    return redirect()->route('dosen.index')->with('success', 'Dosen berhasil diupdate.');
}



    public function destroy($id)
    {
        Http::delete("{$this->api}/$id");
        return redirect()->route('dosen.index');
    }
}
