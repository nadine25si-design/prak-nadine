<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman login (/auth).
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Menangani proses autentikasi form login (Soal 2).
     * Ketentuan:
     * - Jika username dan password sama, arahkan ke halaman Dashboard Admin
     * - Jika salah, arahkan kembali ke halaman Login dengan Alert
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ], [
            'username.required' => 'Kolom Username wajib diisi.',
            'password.required' => 'Kolom Password wajib diisi.',
        ]);

        $username = trim($request->input('username'));
        $password = trim($request->input('password'));

        // Logika sederhana: jika username dan password sama persis
        if ($username !== '' && $username === $password) {
            session([
                'user_logged_in' => true,
                'username'       => $username,
            ]);

            return redirect()
                ->route('admin.dashboard')
                ->with('success', 'Login berhasil! Selamat datang di Dashboard Admin, ' . $username . '.');
        }

        // Jika salah / tidak sama, arahkan kembali ke Login dengan Alert error
        return redirect()
            ->route('login')
            ->withInput($request->only('username'))
            ->with('error', 'Login gagal! Username dan password salah (Username dan password harus bernilai sama).');
    }

    /**
     * Menampilkan halaman registrasi (/register).
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Menangani form pendaftaran akun baru.
     */
    public function register(Request $request)
    {
        $request->validate([
            'name'                  => 'required|string|max:255',
            'email'                 => 'required|string|email|max:255|unique:users,email',
            'password'              => 'required|string|min:6|confirmed',
        ], [
            'name.required'         => 'Nama lengkap wajib diisi.',
            'email.required'        => 'Alamat email wajib diisi.',
            'email.email'           => 'Format email tidak valid.',
            'email.unique'          => 'Email sudah terdaftar.',
            'password.required'     => 'Password wajib diisi.',
            'password.min'          => 'Password minimal harus 6 karakter.',
            'password.confirmed'    => 'Konfirmasi password tidak cocok dengan password.',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('login')
            ->with('success', 'Registrasi berhasil! Silakan login menggunakan akun baru Anda.');
    }

    /**
     * Logout pengguna.
     */
    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('login')
            ->with('success', 'Anda telah berhasil logout.');
    }
}

