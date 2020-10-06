<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Validator;
use Hash;
use Session;
use App\User;


class AuthController extends Controller
{
    public function showFormLogin()
    {
        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');
        }
        return view('login');
    }

    public function login(Request $request)
    {
        // $rules = [
        //     'nik'                 => 'required|is_integer()',
        //     'password'              => 'required|string'
        // ];

        // $messages = [
        //     'nik.required'        => 'Email wajib diisi',
        //     'nik.nik'           => 'Email tidak valid',
        //     'password.required'     => 'Password wajib diisi',
        //     'password.string'       => 'Password harus berupa string'
        // ];

        // $validator = Validator::make($request->all(), $rules, $messages);

        // if($validator->fails()){
        //     return redirect()->back()->withErrors($validator)->withInput($request->all);
        // }

        $data = [
            'nik'     => $request->input('nik'),
            'password'  => $request->input('password'),
        ];

        Auth::attempt($data);

        if (Auth::check()) { // true sekalian session field di users nanti bisa dipanggil via Auth
            //Login Success
            return redirect()->route('home');

        } else { // false

            //Login Fail
            Session::flash('error', 'NIK atau password salah');
            return redirect()->route('login');
        }

    }

    public function showFormRegister()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        $rules = [
            'nik'                   => 'required|min:12|max:12|unique:users,nik',
            'name'                  => 'required',
            'email'                 => 'required|email|max:100',
            'password'              => 'required|confirmed|min:6'
        ];

        $messages = [
            'nik.required'          => 'NIK wajib diisi',
            'nik.min'               => 'NIK minimal 12 karakter',
            'nik.max'               => 'NIK maksimal 12 karakter',
            'nik.unique'            => 'NIK sudah terdaftar',
            'name.required'         => 'Nama Lengkap wajib diisi',
            'password.min'          => 'Password minimal 6 karakter',            
            'email.required'        => 'Email wajib diisi',
            'email.email'           => 'Email tidak valid',            
            'password.required'     => 'Password wajib diisi',
            'password.confirmed'    => 'Password tidak sama dengan konfirmasi password'
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all);
        }

        $user = new User;
        $user->nik = ucwords(strtolower($request->nik));
        $user->name = ucwords(strtolower($request->name));
        $user->email = strtolower($request->email);
        $user->password = Hash::make($request->password);
        $user->email_verified_at = \Carbon\Carbon::now();
        $simpan = $user->save();

        if($simpan){
            Session::flash('success', 'Register berhasil! Silahkan login untuk mengakses data');
            return redirect()->route('login');
        } else {
            Session::flash('errors', ['' => 'Register gagal! Silahkan ulangi beberapa saat lagi']);
            return redirect()->route('register');
        }
    }

    public function logout()
    {
        Auth::logout(); // menghapus session yang aktif
        return redirect()->route('login');
    }


}