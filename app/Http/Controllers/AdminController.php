<?php

namespace App\Http\Controllers;

use App\Mail\EventDiterima;
use App\Mail\EventDitolak;
use Illuminate\Http\Request;
use App\Models\KelolaUser;
use App\Models\KelolaEvent;
use App\Models\User;
use App\Models\kas_umkm;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.dashboard_admin');
    }

    public function tambahuser(){
        return view('Admin.tambah_user');
    }

    public function tambahevent(){
        return view('Admin.tambah_event');
    }
    public function tambahkas_umkm(){
        return view('Admin.tambah_kas_umkm');
    }

    public function name_id()
    {
        $user = User::find(1); // Misalnya, mengambil data pengguna dengan ID 1
        return view('user', ['user' => $user]);
    }

    public function search(Request $request)
    {
        // Validasi input
        if ($request->filled('pencarian')) {
            // Validasi input
            $request->validate([
                'pencarian' => 'string|max:20', // Mengubah required menjadi nullable agar input bisa kosong
            ]);

            $keyword = $request->input('pencarian');
            $data = User::where('role', 'like', '%' . $keyword . '%')->get();
        } else {
            // Jika input kosong, tampilkan semua data
            $data = User::all();
        }

        // Tampilkan hasil pencarian
        return view('Admin.kelola_user', ['User' => $data]);
    }


    public function daftaruser(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate(
        [
        'name'=> 'required',
        'email'=> 'required|email|unique:users',
        'password'=> 'required',
        'role'=> 'required'
        ],

        [
        'name.required'=> 'username Wajib Di Isi',
        'email.required'=> 'Email Wajib Di Isi',
        'email.email'=> 'silahkan masukan email yang valid',
        'email.unique'=> 'email sudah ada, silahkan pilih email lain',
        'password.required'=> 'Password  Wajib Di Isi',
        ]);

        $data=[
        'name' =>$request->name,
        'email' =>$request->email,
        'password' =>Hash::make($request->password),
        'role' =>$request->role
        ];

        User::create($data);

        return redirect()->route('kelola-user');
    }

    //=== kelola user function/method ====
    public function datauser(){
        return view('Admin.kelola_user', [
            'User'=>KelolaUser::all()
        ]);
    }

    public function edituser($id){
        $data = KelolaUser::where('id', $id)->first();
        return view('Admin.edituser')->with('data', $data);
    }


    public function updateuser(Request $request, $id){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            ]);

            $data=[
            'name' =>$request->name,
            'email' =>$request->email,
            ];

            User::where('id', $id)->update($data);
            return redirect()->route('kelola-user')->with('berhasil mengubah data user');
    }

    public function hapususer($id){
        User::where('id', $id)->delete();
        return redirect()->route('kelola-user')->with('berhasil menghapus data user');
    }

    public function cetak_laporanuser(){
        return view('Admin.cetak_laporanuser', [
        'User'=>KelolaUser::all()
    ]);
    }

    public function laporanuser(){
        return view('Admin.laporan_user', [
        'User'=>KelolaUser::all()
    ]);
    }


    public function laporanevent(){
        return view('Admin.laporan_event', [
            'Event'=>kelolaEvent::all()
        ]);
    }
    public function laporankasumkm(){
        return view('Admin.laporan_kas_umkm', [
            'Kas'=>kas_umkm::all()
        ]);
    }

    public function kelolakasumkm(){
        return view('Admin.kelola_kas_umkm',[
        'kas'=>kas_umkm::all()
    ]);
    }

    public function tambahkas_admin(Request $request){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required',
            'jumlah_pembayaran'=> 'required',
            'metode_pembayaran'=> 'required',
            'status'=> 'required'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'jumlah_pembayaran' => $request->jumlah_pembayaran,
            'metode_pembayaran' => $request->metode_pembayaran,
            'status' => $request->status
        ];

        // Simpan data pengajuan event ke dalam tabel kelolaEvent
        kas_umkm::create($data);

        // Redirect dengan pesan berhasil jika pengguna berhasil masuk
        return redirect()->route('kelola-kas-umkm');
    }

    public function showkas($id){
        return view('Admin.detailkasumkm', [
            'kas' => kas_umkm::where('id', $id)->first()
        ]);
    }

    //=== kelola event function/method ===
    public function kelolaevent(){
        return view('Admin.kelola_event', [
            'Event'=>kelolaEvent::all()
        ]);
    }

    public function editevent($id){
        $data = kelolaevent::where('resi_id', $id)->first();
        return view('Admin.editevent')->with('data', $data);
    }

    public function update_event(Request $request, $resi_id){
        $request->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            ]);

            $data=[
            'nama' =>$request->name,
            'email' =>$request->email,
            ];

            kelolaevent::where('resi_id', $resi_id)->update($data);
            return redirect()->route('kelola-event')->with('toats_success', 'berhasil mengubah data event');
    }

    public function cetak_laporanevent(){
        return view('Admin.cetak_laporanevent', [
        'Event'=>kelolaEvent::all()
    ]);
    }

    public function cetak_laporankasumkm(){
        return view('Admin.cetak_laporankasumkm', [
        'Kas'=>kas_umkm::all()
    ]);
    }

    public function show($id){
        return view('Admin.detailuser', [
            'user' => KelolaUser::find($id)
        ]);
    }


    public function showevent($resi_id){
        return view('Admin.detailevent', [
            'event' => Kelolaevent::where('resi_id', $resi_id)->first()
        ]);
    }


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
        KelolaEvent::create($data);

        // Redirect dengan pesan berhasil jika pengguna berhasil masuk
        return redirect()->route('kelola-event');
    }

    public function statuskas($id, $status){
        $label = ''; // variabel untuk menyimpan label, dapat diganti dengan label sesuai kebutuhan

    if ($status == 'diterima') {
        $label = 'diterima';
    } elseif ($status == 'ditolak') {
        $label = 'Ditolak';
    } else {
        // Status tidak valid
        return redirect()->back()->withErrors(['Status tidak valid']);
    }

    // Mengupdate status berdasarkan parameter $status
    $Kas = kas_umkm::where('id', $id)->update([
        'status' => $status
    ]);

    if (!$Kas) {
        return redirect()->back()->withErrors(['Event tidak ditemukan']);
    } else {
        return redirect()->route('konfirmasi-event')->with('label', $label);
    }
    }
    public function statusevent($resi_id, $status){
        $label = ''; // variabel untuk menyimpan label, dapat diganti dengan label sesuai kebutuhan

        // Mendapatkan alamat email terkait dengan resi_id
        $email = KelolaEvent::where('resi_id', $resi_id)->first()->email;

        if ($status == 'diterima') {
            $label = 'diterima';

            // Mengirim email untuk status 'diterima'
            Mail::to($email)->send(new EventDiterima($email));

        } elseif ($status == 'ditolak') {
            $label = 'Ditolak';

            // Mengirim email untuk status 'ditolak'
            Mail::to($email)->send(new EventDitolak($email));
        } else {
            // Status tidak valid
            return redirect()->back()->withErrors(['Status tidak valid']);
        }

        // Mengupdate status berdasarkan parameter $status
        $event = KelolaEvent::where('resi_id', $resi_id)->update([
            'status' => $status
        ]);

        if (!$event) {
            return redirect()->back()->withErrors(['Event tidak ditemukan']);
        } else {
            return redirect()->route('konfirmasi-event')->with('label', $label);
        }
    }
//     public function statusevent($resi_id, $status){
//         $label = ''; // variabel untuk menyimpan label, dapat diganti dengan label sesuai kebutuhan

//     if ($status == 'diterima') {
//         $label = 'diterima';

//     } elseif ($status == 'ditolak') {
//         $label = 'Ditolak';
//     } else {
//         // Status tidak valid
//         return redirect()->back()->withErrors(['Status tidak valid']);
//     }

//     // Mengupdate status berdasarkan parameter $status
//     $event = KelolaEvent::where('resi_id', $resi_id)->update([
//         'status' => $status
//     ]);

//     if (!$event) {
//         return redirect()->back()->withErrors(['Event tidak ditemukan']);
//     } else {
//         return redirect()->route('konfirmasi-event')->with('label', $label);
//     }
// }


}