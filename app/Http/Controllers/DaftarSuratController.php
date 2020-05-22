<?php
 
namespace App\Http\Controllers;

use App\DaftarSurat;
use Illuminate\Http\Request;

class DaftarSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $daftarsurat = DaftarSurat::paginate(10);
        // $daftarsurat = DaftarSurat::all();
        return view('admin.daftarsurat.index', compact('daftarsurat'));
    }

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
         $daftarsurat = DaftarSurat::findorfail($id);
        return view('admin.daftarsurat.edit', compact('daftarsurat'));
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
            'surat_indonesia' => 'required'
        ]);

        $daftarsurat_data = [
            'surat_indonesia' => $request->surat_indonesia,
            'surat_arab' => $request->surat_arab,
            'arti' => $request->arti,
            'jumlah_ayat' => $request->jumlah_ayat,
            'tempat_turun' => $request->tempat_turun,
            'urutan_pewahyuan' => $request->urutan_pewahyuan
        ];

        DaftarSurat::whereId($id)->update($daftarsurat_data);

        return redirect()->route('daftarsurat.index')->with('success','data berhasil di update');
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
