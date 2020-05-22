<?php


namespace App\Http\Controllers;

use App\Kontributor;
use App\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
	public function laporanpelanggan()
	{
		$pelanggan = Pelanggan::all();
    	$pelanggan = DB::table('pelanggan')
            ->leftjoin('users', 'pelanggan.id', '=', 'users.id')
            ->leftjoin('donasi', 'pelanggan.id', '=', 'donasi.id')
            ->get();

    return view('admin.laporan.pelanggan', compact('pelanggan'));
	}

	public function laporankontributor()
	{
		$kontributor = Kontributor::all();
    	$kontributor = DB::table('kontributor')
            ->leftjoin('users', 'kontributor.id', '=', 'users.id')
            ->get();

    return view('admin.laporan.kontributor', compact('kontributor'));
	}
}
