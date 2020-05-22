<?php

namespace App\Http\Controllers;

use App\Daftarbab;
use App\Category;
use Illuminate\Http\Request;

class DaftarbabController extends Controller
{
    public function index()
    {
        $daftarbab = Daftarbab::paginate(20);

        return view('admin.daftarbab.index', compact('daftarbab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.daftarbab.create', compact('category'));
        // untuk menampilkan file create pada folder category
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // fungsi untuk menyimpan
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'namasubbab' => 'required',
            'sub' => 'required'
        ]);

        $daftarbab = Daftarbab::create([
            'category_id' => $request->category_id,
            'namasubbab' => $request->namasubbab,
            'sub' => $request->sub
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil disimpan');
        // apabila function store berhasil direturn, maka data berhasil disimpan dan muncul notif succes, kategori berhasil disimpan 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // fungsi untuk menampilkan 
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
    // untuk mengarahkan ke form edit, biasanya digunakan pada edit data
    public function edit($id)
    {
        $category = Category::all();
        $daftarbab = Daftarbab::findorfail($id);

        return view('admin.daftarbab.edit', compact('daftarbab','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // untuk melkakukan update, biasanya pada simpan data setelah diedit
    public function update(Request $request, $id)
    // $id didapat dari id edit.blade.php
    // Request dari input nama kategoru {edit.blade.php}
    {
        $this->validate($request, [
            'category_id' => 'required',
            'namasubbab' => 'required',
            'sub' => 'required'
        ]);

        $daftarbab_data = [
            'category_id' => $request->category_id,
            'namasubbab' => $request->namasubbab,
            'sub' => $request->sub
        ];

        Daftarbab::whereId($id)->update($daftarbab_data);

        return redirect()->route('daftarbab.index')->with('success','data berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // untuk menghapus spesifik data
    public function destroy($id)
    {
        $daftarbab = Daftarbab::findorfail($id);
        $daftarbab->delete();

        return redirect()->back()->with('success', 'data berhasil dihapus');
    }
}
