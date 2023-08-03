<?php

namespace App\Http\Controllers;

use App\Models\aduan;
use App\Models\Aplikasi;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class publikContoller extends Controller
{
    public function index(Request $request)
    {

        // $selectedItem = $request->query('selected_item');
        $antri = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
        $app = Aplikasi::pluck('id', 'nama_aplikasi');
        // $app->appends(['selected_item' => $selectedItem]);
        return view('welcome', ['antri' => $antri, 'apps' => $app]);
    }


    public function app()
    {

        $tittle = 'Daftar Aplikasi';
        // $app = Aplikasi::all();
        return view('app-publik', compact(['tittle']));
    }


    public function showapp($slug)
    {
        $app = Aplikasi::where('slug', $slug)->first();

        if ($app) {

            $tittle = $app->nama_aplikasi;
            $slug = '/app';
            $slugname = 'Aplikasi';
            return view('show-app', compact(['tittle', 'app', 'slugname', 'slug']));
        } else {
            return redirect()->route('publik');

        }
    }

    public function waitinglist()
    {

        $tittle = 'Daftar Antrian Aplikasi';
        $slug = '/waiting-list';
        $slugname = 'Antrian';
        $list = Aplikasi::whereNotNull('no_urut')->orderBy('no_urut')->get();
        return view('waiting-list', compact(['tittle', 'list', 'slug', 'slugname']));
    }

    public function pemeliharaan()
    {
        $slug = '/pemeliharaan';
        $slugname = 'Pemeliharaan';
        $list = Pengaduan::where('status', '<>', 'Selesai')->get();
        $tittle = 'Daftar Antrian Pemeliharaan';
        return view('pemeliharaan', compact(['tittle', 'slug', 'slugname', 'list']));
    }

    public function aduan(Request $request)
    {

        $this->validate($request, [
            'g-recaptcha-response' => 'recaptcha|required',
            'cp' => 'required|numeric',
            'judul_aplikasi' => 'required',
            'deskripsi' => 'required'
        ], [
            'g-recaptcha-response.recaptcha' => 'Mohon konfirmasikan bahwa Anda bukan robot dengan mengisi kolom reCaptcha.',
            'cp.required' => 'Kolom Kontak Person (CP) wajib diisi.',
            'cp.numeric' => 'Kolom Kontak Person (CP) hanya boleh berisi angka.',
            'judul_aplikasi.required' => 'Kolom Judul Aplikasi wajib diisi.',
            'deskripsi.required' => 'Kolom Deskripsi wajib diisi.'
        ]);



        aduan::create([
            'judul_aplikasi' => $request->judul_aplikasi,
            'cp' => $request->cp,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect('/')->with('success', 'Aduan berhasil dikirim.');


        // return redirect()->back();
    }
}
