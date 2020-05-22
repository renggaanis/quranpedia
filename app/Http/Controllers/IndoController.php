<?php

namespace App\Http\Controllers;

use App\Indo;
use App\DaftarSurat;
use Illuminate\Http\Request;

class IndoController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $indo = Indo::paginate(50);
        return view('admin.alquran.indo.index', compact('indo'));
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
        $daftarsurat = DaftarSurat::all();
        $indo = Indo::findorfail($id);
        return view('admin.alquran.indo.edit', compact('indo','daftarsurat'));
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
            'daftarsurat_id' => 'required',
            'AyahText' => 'required'
        ]);

        $indo_data = [
            'daftarsurat_id' => $request->daftarsurat_id,
            'AyahText' => $request->AyahText
        ];

        Indo::whereId($id)->update($indo_data);

        return redirect()->route('indo.index')->with('success','data berhasil di update');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
