<?php

namespace App\Http\Controllers;

use App\Models\kas_umkm;
use App\Models\KelolaUser;
use Illuminate\Http\Request;


class c_umkm extends Controller
{
    public function index(){
        return view('UMKM.dashbard_umkm');
    }

    public function data_diriuser(){
        return view('UMKM.data_diri_umkm');
    }

    public function pembayarankas(){
        return view('UMKM.pembayarankas');
    }

    public function bayarkas_umkm(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'jumlah_pembayaran'=> 'required',
            'metode_pembayaran'=> 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'jumlah_pembayaran' => $request->jumlah_pembayaran,
            'metode_pembayaran' => $request->metode_pembayaran,
        ];

        // Simpan data pengajuan event ke dalam tabel kelolaEvent
        kas_umkm::create($data);

        // Redirect dengan pesan berhasil jika pengguna berhasil masuk
        return redirect()->route('umkm');
    }

    public function datauser(){
        return view('UMKM.dashbard', [
            'User'=>KelolaUser::all()
        ]);
    }
}