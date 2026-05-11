<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Menampilkan halaman form login
     */
    public function showLoginForm()
    {
        // Jika user sudah login, langsung tendang ke home
        if (Auth::check()) {
            return redirect()->route('home');
        }
        
        return view('login');
    }

    /**
     * Memproses data saat tombol Login ditekan
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'nim' => ['required', 'string'],
            'password' => ['required'],
        ]);

        // Coba cocokkan dengan database
        if (Auth::attempt(['nim' => $credentials['nim'], 'password' => $credentials['password']])) {
            // Jika berhasil, perbarui session untuk keamanan
            $request->session()->regenerate();
            
            // Cek jika user belum pernah ganti password
            if (!Auth::user()->is_password_changed) {
                return redirect()->route('password.change');
            }

            // Arahkan ke halaman utama (home)
            return redirect()->intended('/');
        }

        // Jika gagal, kembalikan ke halaman login dengan pesan error
        return back()->withErrors([
            'nim' => 'NIM atau password yang Anda masukkan salah.',
        ])->onlyInput('nim');
    }

    /**
     * Memproses Logout
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    // --- FITUR GANTI PASSWORD ---

    public function changePassword()
    {
        return view('ganti_password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Auth::user();
        
        // Update password & ubah status menjadi sudah diganti (true)
        User::where('id', $user->id)->update([
            'password' => Hash::make($request->password),
            'is_password_changed' => true,
        ]);

        // Arahkan ke home setelah berhasil ganti password
        return redirect()->route('home')->with('success', 'Password berhasil diperbarui! Selamat datang di area manajemen.');
    }

    // --- FITUR PROFIL SAYA ---

    public function editProfile()
    {
        return view('profile');
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $user = Auth::user();
        $user->name = $request->name;
        $user->email = $request->email;

        // Jika ada upload foto profil baru
        if ($request->hasFile('profile_photo')) {
            $path = $request->file('profile_photo')->store('profile_photos', 'public');
            $user->profile_photo = $path;
        }

        $user->save();

        return redirect()->route('profile.edit')->with('success', 'Profil berhasil diperbarui!');
    }
}