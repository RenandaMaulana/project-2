<?php

namespace App\Http\Controllers;

use App\Models\kas_umkm;
use Illuminate\Http\Request;

class Kas_umkmController extends Controller
{
    public function admin_pengajuanevent(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'event'=> 'required',
            'phone'=> 'required',
            'target_peserta'=> 'required',
            'berkas'=> 'required',
            'tanggalacara'=> 'required',
            'selesaiacara'=> 'required',
            'pesan'=>''
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'event' => $request->event,
            'phone' => $request->phone,
            'target_peserta' => $request->target_peserta,
            'berkas' => $request->berkas,
            'tanggalacara' => $request->tanggalacara,
            'selesaiacara' => $request->selesaiacara,
            'pesan' => $request->pesan,
        ];

        // Simpan data pengajuan event ke dalam tabel kelolaEvent
        kas_umkm::create($data);

        // Redirect dengan pesan berhasil jika pengguna berhasil masuk
        return redirect()->route('kelola-event');
    }
}