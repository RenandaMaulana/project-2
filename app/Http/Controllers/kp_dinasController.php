<?php

namespace App\Http\Controllers;

use App\Models\kas_umkm;
use Illuminate\Http\Request;
use App\Models\KelolaUser;
use App\Models\KelolaEvent;


class kp_dinasController extends Controller
{
    public function index(){
        return view('kepala_dinas.dashboard_kepala_dinas');
    }

    public function konfirmasievent(){
        return view('kepala_dinas.konfirmasi_event', [
            'Event'=>kelolaEvent::all()
        ]);
    }

    public function laporanuser(){
        return view('kepala_dinas.laporan_user', [
        'User'=>KelolaUser::all()
    ]);
    }
    public function laporanevent(){
        return view('kepala_dinas.laporan_event', [
        'Event'=>kelolaEvent::all()
    ]);
    }
    public function cetak_laporanuser(){
        return view('Admin.cetak_laporanuser', [
        'User'=>KelolaUser::all()
    ]);
    }
    public function cetak_laporanevent(){
        return view('Admin.cetak_laporanevent', [
        'Event'=>kelolaEvent::all()
    ]);
    }
    public function showevent($resi_id){
        return view('kepala_dinas.detail_event', [
            'event' => Kelolaevent::where('resi_id', $resi_id)->first()
        ]);
    }
    public function cetak_laporankasumkm(){
        return view('kepala_dinas.cetak_laporan_kas', [
        'Kas'=>kas_umkm::all()
    ]);
    }

    public function laporankasumkm(){
        return view('kepala_dinas.laporan_kas_umkm', [
            'Kas'=>kas_umkm::all()
        ]);
    }
}