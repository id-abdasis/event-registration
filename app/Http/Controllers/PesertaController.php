<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use Session;

class PesertaController extends Controller
{
    public function daftarPeserta()
    {
        $peserta = Peserta::all();
        return \view('admin.peserta.daftar-peserta')->with(['pesertas' => $peserta]);
    }
    public function pendaftaranPeserta()
    {
        return view('admin.peserta.pendaftar-peserta');
    }
    public function StorePendaftaranPeserta(Request $request)
    {
        try {
            $peserta = Peserta::create($request->all());
            // return \view('')
        } catch (\Throwable $th) {
            
            return view('admin.peserta.pendaftar-peserta')->withError();
        }
    }
}
