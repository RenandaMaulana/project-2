<?php

namespace App\Http\Controllers;

use App\Mail\event_information;
use App\Mail\KirimEmail;
use App\Models\KelolaEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    public function index(){
    return view('Admin.kelola_event', [

    ]);
    }


    public function pengajuanevent(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'event'=> 'required',
            'phone'=> 'required',
            'target_peserta'=> 'required',
            'berkas'=> 'required',
            'poster'=> 'required',
            'tanggalacara'=> 'required',
            'selesaiacara'=> 'required',
            'pesan'=>''
        ]);
        $file_poster = $request->file('poster');
        $file_berkas = $request->file('berkas');

        if ($file_poster && $file_berkas) {
            $fileName_poster = $file_poster->getClientOriginalName();
            $fileName_berkas = $file_berkas->getClientOriginalName();

            // Tambahkan prefix unik jika diperlukan
            $fileName_poster = uniqid() . '_' . $fileName_poster;
            $fileName_berkas = uniqid() . '_' . $fileName_berkas;

            $file_poster->move(public_path('poster_event'), $fileName_poster);
            $file_berkas->move(public_path('proposal_event'), $fileName_berkas);
        } else {
            // Tangani jika file tidak diunggah
        }

        // $file_poster = $request->file('poster');
        // $file_berkas = $request->file('berkas');
        // $fileName_poster = Request()->$file_poster . '_' . $file_poster->getClientOriginalName();
        // $fileName_berkas = Request()->$file_berkas . '_' . $file_berkas->getClientOriginalName();
        // $file_poster->move(public_path('poster_event'), $fileName_poster);
        // $file_berkas->move(public_path('proposal_event'), $fileName_berkas);

        $data = KelolaEvent::create([
            'name' => $request->name,
            'email' => $request->email,
            'event' => $request->event,
            'phone' => $request->phone,
            'target_peserta' => $request->target_peserta,
            // 'berkas' => $fileName_berkas,
            // 'poster' => $fileName_poster,
            'berkas' => $request->berkas,
            'poster' => $request->poster,
            'tanggalacara' => $request->tanggalacara,
            'selesaiacara' => $request->selesaiacara,
            'pesan' => $request->pesan,
        ]);

        // Kirim email konfirmasi
        Mail::to($request->email)->send(new event_information($data));

        return redirect()->route('dahsboard-subang')->with('success', 'Data event berhasil diajukan.');

        // $pesan = "<p><b>Hallo, " . $data['name'] . "</b></p>";
        // $pesan .= "<p>Kami sangat antusias untuk mengajukan Event " . $data['event'] . " di Alun-Alun Subang: Acara ini akan menjadi platform yang memukau untuk merayakan dan menghargai kekayaan budaya dan seni dari berbagai yang terletak di Subang.</p>";

        // $data_email = [
        //     'subject' => 'Event Alun-Alun Subang',
        //     'sender_name' => 'saytamagame8@gmail.com',
        //     'isi' => $pesan
        // ];

        // Mail::to("saytamagame8@gmail.com")->send(new KirimEmail($data_email));

        // // Redirect dengan pesan berhasil jika pengguna berhasil masuk
        // if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
        //     return redirect("pengajuan event berhasil");
        // } else {
        //     // Redirect kembali dengan pesan error jika tidak berhasil masuk
        //     return redirect()->back()->withErrors(['data yang dimasukan belum sesuai'])->withInput();
        // }

        }


}