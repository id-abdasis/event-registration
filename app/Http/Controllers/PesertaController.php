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
        try {
            $peserta = Peserta::create($request->all());
            Session::flash('daftar_berhasil');
            if (Session::has('daftar_berhasil')) {
                Alert::success('Berhasil', 'Pendaftaran Berhasil Tunggu Konfirmasi Selanjutnya');
                return view('admin.peserta.pendaftar-peserta')->with(['error' => 'Ada Kesalahan Saat Memasukan Data']);
            }
        } catch (\Throwable $th) {
            \report($th);
            return view('admin.peserta.pendaftar-peserta')->with(['error' => 'Ada Kesalahan Saat Memasukan Data']);
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
