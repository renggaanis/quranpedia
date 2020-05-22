<?php

namespace App\Http\Controllers;

use App\Surat;
use Illuminate\Http\Request;

class SuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $surat = Surat::paginate(10);
        // $daftarsurat = DaftarSurat::all();
        return view('admin.surat.surat.index', compact('surat'));
    
    }

    // public function show_quran($surat, $nama=''){  
    // mb_internal_encoding('UTF-8'); 
    // if (($surat < 1) || ($surat > 114)) exit; 
    // echo '<p><a href="admin.surat.surat.index">Kembali ke Index</a></p>';
    // echo '<h3>'.$nama.'</h3>';
    // if($surat > 1) {
    //     echo '<p class ="arabic_center">'.mb_strtolower('بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ').'</p>';
    //     echo '<hr />'; 
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $surat = Surat::findorfail($id);
        return view('admin.surat.surat.edit', compact('surat'));
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
        $this->validate($request, [
            'text' => 'required'
        ]);

        $surat_data = [
            'daftarsurat_id' => $request->daftarsurat_id,
            'ayat' => $request->ayat,
            'text' => $request->text
        ];

        Surat::whereId($id)->update($surat_data);

        return redirect()->route('surat.index')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
