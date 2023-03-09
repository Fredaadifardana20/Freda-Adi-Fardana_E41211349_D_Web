<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|string', // VALIDASI KOLOM USERNAME, TAPI KOLOM INI BISA BERISI EMAIL ATAU USERNAME
            'password' => 'required|string|:min:6',
        ]);

        //LAKUKAN PENGECEKAN, JIKA INPUTAN DARI USERNAME FORMATNYA ADALAH EMAIL, MAKA KITA AKAN MELAKUKAN PROSES AUTHENTICATION MENGGUNAKNA EMAIL, SELAIN ITU, AKAN MENGGUNAKAN USERNAME
        $logintype = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        //TAMPUNG INFORMASI LOGINNYA, DIMANA KOLOM TYPE PERTAMA BERSIFAT DINAMIS BERDASARKAN CALUE DARI PENGECEKAN DIATAS
        $login = [
            $logintype => $request->username,
            'password' => $request->password,
        ];

        //LAKUKAN LOGIN
        if (auth()->attempt($login)) {
            //JIKA BERHASIL, MAKA REDIRECT KE HALAMAN HOME
            return redirect()->route('home');
        }
        //JIKA SALAH, MAKA KEMBALI KE LOGIN DAN TAMPILAN NOTIFIKASI
        return redirect()->route('login')->with(['error' => 'Email/Password salah!']);
    }
}
