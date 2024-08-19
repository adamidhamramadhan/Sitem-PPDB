<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function index()
    {
        if ($user = Auth::user()) {
            if ($user->role == 'admin') {
                return redirect()->intended('admin');
            } else if ($user->role == 'siswa') {
                return redirect()->intended('siswa');
            }
        }
        return view('pages.login');
    }

    public function proses_login(Request $request) {
        request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $kredensil = $request->only('username', 'password');
        
            if (Auth::attempt($kredensil)) {
                $user = Auth::user();
                if ($user->role == 'admin') {
                    return redirect()->intended('admin');
                } else if ($user->role == 'siswa') {
                    return redirect()->intended('siswa');
                }
                return redirect()->intended('/');
            }
        return redirect('login')
            ->withInput()
            ->withErrors(['login_gagal' => 'Username dan password salah!']);    
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('login');
    }

    public function registrasi()
    {
        return view('pages.register');
    }

    public function proses_registrasi(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'nisn' => 'required|unique:users|numeric|digits:10',
            'email' => 'required|email|unique:users',
            'username' => 'required|min:4|max:12|unique:users',
            'password' => 'required|min:6|max:16',
        ]);

        try {
            $data = $request->all();
            $check = $this->create($data);

            return redirect()->route('login')
                ->with('success', 'Selamat Anda berhasil mendaftar akun!');
        } catch (\Exception $e){
            return redirect()->back()
                ->with('error', 'Gagal Mendaftar akun!');
        }
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'nisn' => $data['nisn'],
        'email' => $data['email'],
        'username' => $data['username'],
        'password' => Hash::make($data['password'])
      ]);
    }
}
