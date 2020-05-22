<?php

namespace App\Http\Controllers;

use App\Donasi;
use App\User;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donasi = Donasi::paginate(10);
        return view('admin.donasi.datadonasi', compact('donasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.donasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'id' => 'required',
            'akun_gopay' => 'required',
            'jumlah_donasi' => 'required'
        ]);

        $donasi = Donasi::create([
            'id' => $request->id,
             'akun_gopay' => $request->akun_gopay,
            'jumlah_donasi' => $request->jumlah_donasi
        ]);

        return redirect()->route('profile.index')->with('success', 'donasi berhasil dikirim. Terima kasih atas kemurahan hati anda');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $donasi = Donasi::findorfail($id);
    //     $donasi->delete();

    //     return redirect()->back()->with('success', 'data berhasil dihapus');
    // }

    public function linkdonasi()
    {
        return view('admin.donasi.index');
    }
}
