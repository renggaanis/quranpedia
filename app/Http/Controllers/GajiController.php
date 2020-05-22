<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GajiController extends Controller
{
    public function gaji()
	{
		$post = Posts::all();
    	$post = DB::select('SELECT users_id, COUNT(users_id)*30000 AS gaji FROM posts GROUP BY users_id');
    return view('admin.laporan.gaji', compact('post'));
	}

	public function gajikontributor()
	{
		$post = Posts::all();
    	$post = DB::select('SELECT users_id, COUNT(users_id)*30000 AS gaji FROM posts GROUP BY users_id');
    return view('admin.laporan.gajikontributor', compact('post'));
	}
}