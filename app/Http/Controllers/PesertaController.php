<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peserta;
use Session;
Use Alert;

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
        $peserta = Peserta::create($request->all());
        if ($peserta) {
            Alert::success('Berhasil', 'Pendaftaran Berhasil Tunggu Konfirmasi Selanjutnya');
            return redirect()->route('pendaftaran-peserta');
        }else{
            Alert::error('Gagal', 'Ada Kesalahan Saat Pengisian Data');
            return redirect()->route('pendaftaran-peserta');
        }
    }
    public function detailPeserta($id)
    {
        $peserta = Peserta::find($id)->get();
        return response()->json($peserta, 200);
    }

    public function dokumentasiHimanura()
    {
        return view('video-player');
    }
}
