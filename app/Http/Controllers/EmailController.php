<?php

namespace App\Http\Controllers;

use App\Mail\KirimEmail;
use App\Mail\testcoba;
use App\Models\KelolaEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function EmailEvent($resi_id){
        // Mendapatkan data pengaju event dari database
        $pengajuEvent = KelolaEvent::find($resi_id); // $id adalah ID pengaju event yang ingin Anda ambil

        if($pengajuEvent){
            // Menggunakan nama pengaju event dalam pesan email
            $pesan = "<p><b>Hallo, " . $pengajuEvent->name . "</b></p>";
            $pesan .= "<p>Kami sangat antusias untuk mengajukan Event $pengajuEvent->event di Alun-Alun Subang: Acara ini akan menjadi platform yang memukau untuk merayakan dan menghargai kekayaan budaya dan seni dari berbagai yang terletak di Subang.</p>";

            $data_email = [
                'subject' => 'Event Alun-Alun Subang',
                'sender_name' => 'saytamagame8@gmail.com',
                'isi' => $pesan
            ];

            Mail::to("saytamagame8@gmail.com")->send(new KirimEmail($data_email));

            // Lanjutkan dengan mengirim email menggunakan data yang sudah disiapkan
        } else {
            // Jika data pengaju event tidak ditemukan
            // Lakukan penanganan kesalahan di sini
        };

    }

    public function SendEmail(){
        Mail::to("renandamaulana64@gmail.com")->send(new testcoba());
        return redirect()->route('login');
    }

}