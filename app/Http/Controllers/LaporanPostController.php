<?php

namespace App\Http\Controllers;

use App\Posts;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanPostController extends Controller
{
    public function laporanpost()
	{
		$post = Posts::all();
    	$post = DB::select('SELECT users_id, COUNT(users_id) AS total FROM posts GROUP BY users_id');
    return view('admin.laporan.post', compact('post'));
	}
}