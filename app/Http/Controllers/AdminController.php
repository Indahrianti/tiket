<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $asal = DB::table('asals')->count();
        $tujuan = DB::table('tujuans')->count();
        $kereta = DB::table('keretas')->count();
        $penumpang = DB::table('penumpangs')->count();
        $transaksi = DB::table('transaksis')->count();

        return view('admin.dashboard', compact('asal','tujuan','kereta','penumpang','transaksi'));
    }

    // public function dashboardUser()
    // {
    //     $pegawai = DB::table('pegawai')->count();
    //     $penggajian = DB::table('penggajian')->count();
    //     return view('pengguna.dashboardUser', compact('pegawai','penggajian'));
    // }

    // public function laporan()
    // {
    //     $pengguna = Pengguna::with('users')->get();
    //     $kegiatan = Kegiatan::all();
    //     $laporan = DB::table('users')->where('role', 'Account User')->get();
    //     return view('layouts.admin.laporan', compact('pengguna','kegiatan','laporan'));
    // }

}