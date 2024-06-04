<?php

namespace App\Http\Controllers;

use App\Mail\forgot_password;
use App\Mail\register;
use App\Mail\testcoba;
use App\Models\EmailVerification;
use App\Models\Emailverifikasi;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
use Nette\Utils\Random;

class loginController extends Controller
{
    public function index(){
        return view('v_dahsboard/login1');
    }

    public function newLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],

        [
            'email.required'=> 'Email Wajib Di Isi',
            'password.required'=> 'Password Wajib Di Isi',
        ]);



        if (Auth::attempt($credentials)) {
            if(Auth::user()->role=='admin'){
                return redirect('admin')->with('success', 'Berhasil masuk!');

            }elseif(Auth::user()->role=='kepala_dinas'){
                return redirect('kepala-dinas')->with('success', 'Berhasil masuk!'); //INI

                }elseif(Auth::user()->role=='umkm'){
                    return redirect('umkm')->with('success', 'Berhasil masuk!'); //INI
        };
        }else{
            return redirect()->back()->withErrors(['username dan password yang dimasukan tidak sesuai'])->withInput();
        }

    }


    public function logout(){
        Auth::logout();
        return redirect('login');
    }
    public function register(){
        return view('v_dahsboard.Register');
    }


    public function daftar(Request $request){
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate(
        [
        'name'=> 'required',
        'email'=> 'required|email|unique:users',
        'password'=> 'required'
        ],

        [
        'name.required'=> 'username Wajib Di Isi',
        'email.required'=> 'Email Wajib Di Isi',
        'email.email'=> 'silahkan masukan email yang valid',
        'email.unique'=> 'email sudah ada, silahkan pilih email lain',
        'password.required'=> 'Password  Wajib Di Isi',
        ]);

        $data = user::insertGetId([
        'name' =>$request->name,
        'email' =>$request->email,
        'password' =>Hash::make($request->password)
        ]);

        // User::create($data);

        EmailVerification::insert([
            'user_id' => $data,
            'token' => crypt($data . Random::generate(4, '0-9') . now(), 10),
            'method' => 'email-verif',
            'created_at' => now()
        ]);

        Mail::to($request->email)->send(new register($request->email, 'daftar/email-verification'));

        return redirect()->route('view-konfirmasi-user');
    }


    public function v_email_verifikasi(){
        return view('email.register_information');
    }

    public function email_verifikasi($id, $token, $method){
        $user = User::find($id);
        $route = '';
        $session = [];
        if ($user) {
            if ($method == 'email-verif') {
                $route = 'login';
                $session = [
                    'title' => 'Email Verification',
                    'icon' => 'success',
                    'text' => 'successfully verified email! Now you can login!'
                ];
                EmailVerification::where([
                    ['user_id', $id],
                    ['token', $token]
                ])->delete();
                User::where('id', $id)->update([
                    'email_verified_at' => now()
                ]);
            } else {
                $route = 'login';
            }
        }
        return redirect()->route($route)->with($session);
    }

    public function v_forgot_password(){
        return view('email.forgot_password_information');
    }

    public function forgotpassword_email()
    {
        return view('v_dahsboard.forgot_password_email');
    }
    public function forgotpassword()
    {
        return view('v_dahsboard.forgot_password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users,email',
        ],

        [
            'email.required'=> 'Email Wajib Di Isi'
        ]);

        $data = User::where('email',$request->email)->first();
            // User::create($data);

            EmailVerification::insert([
                'user_id' => $data->id,
                'token' => crypt($data->id . Random::generate(4, '0-9') . now(), 10),
                'method' => 'forgot-password',
                'created_at' => now()
            ]);

            Mail::to($request->email)->send(new forgot_password($request->email, 'login/forgot-password'));

            return redirect()->route('v-forgot-password');
    }
    public function password_update_input($id, $token, $method){
        $user = User::find($id);
        $route = '';
        $session = [];
        if ($user) {
            if ($method == 'forgot-password') {
                $route = 'forgot-input-password';
                $session = [
                    'title' => 'Email Verification',
                    'icon' => 'success',
                    'text' => 'successfully verified email! Now you can login!'
                ];
                EmailVerification::where([
                    ['user_id', $id],
                    ['token', $token]
                ])->delete();
                User::where('id', $id)->update([
                    'email_verified_at' => now()
                ]);
            } else {
                $route = 'login';
            }
        }
        return redirect()->route($route)->with($session);
    }

    public function forgotpassword_update(Request $request)
{
    // Validasi inputan password
    $request->validate([
        'password' => 'required|string|min:6|max:20', // Sesuaikan dengan aturan validasi yang sesuai
        'password_validasi' => 'required|string|min:6|max:20|same:password', // Sesuaikan dengan aturan validasi yang sesuai
    ], [
        'password.required' => 'Password wajib diisi',
        'password_validasi.required' => 'Konfirmasi password wajib diisi',
        'password.min' => 'Password minimal harus mengandung 6 karakter',
        'password.max' => 'Password maksimal harus mengandung 20 karakter',
        'password_validasi.min' => 'Password minimal harus mengandung 6 karakter',
        'password_validasi.max' => 'Password maksimal harus mengandung 20 karakter',
        'password_validasi.same' => 'Password validasi harus sama dengan password',
    ]);

    // Periksa apakah password dan konfirmasi password cocok
    // if ($request->password !== $request->password_validasi) {
    //     return back()->withInput()->withErrors(['password' => 'Password dan konfirmasi password tidak cocok']);
    // }

    // Temukan user berdasarkan email
    $user = EmailVerification::where('user_id', $request->email)->first();

    // Jika user ditemukan
    if ($user) {
        // Simpan password baru
        $user->password = Hash::make($request->password); // Hash password baru sebelum menyimpannya
        $user->save();

        // Buat entri verifikasi email
        $emailVerification = new EmailVerification();
        $emailVerification->user_id = $user->id; // Ambil ID pengguna yang baru saja dibuat
        $emailVerification->token = Random::generate(4, '0-9') . Carbon::now()->format('U'); // Generate token dengan panjang 10 karakter
        $emailVerification->method = 'forgot-password';
        $emailVerification->created_at = now();
        $emailVerification->save();

        // Tentukan rute dan sesi berdasarkan metode
        $route = 'login';
        $session = [
            'title' => 'Password Updated',
            'icon' => 'success',
            'text' => 'Password berhasil diperbarui. Silakan login dengan password baru Anda.'
        ];

        // Redirect ke halaman yang sesuai
        return redirect()->route($route)->with($session);
    } else {
        // Jika user tidak ditemukan, beri pesan kesalahan
        return back()->withInput()->withErrors(['email' => 'Email tidak ditemukan']);
    }
}

}