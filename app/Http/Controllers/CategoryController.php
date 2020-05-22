<?php

namespace App\Http\Controllers;
 
use App\Category;
// untuk mencantumkan model category

use Illuminate\Http\Request;

use Illuminate\Support\Str; 
// agar dapat menggunakan Str::slug PADA FUNCTION STORE DAN UPDATE

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */ 
    // menampilkan listing dari resource
    public function index()
    {
        $category = Category::paginate(10);
        // $category merupakan variabel, berarti variabel category nanti memanggil model category sebanyak 5 data, paginate berarti nanti apabila terdapat lebih 5 data nanti di pagination

        return view('admin.category.index', compact('category'));
        // admin.category.index berarti nanti fungsi ini akan menampilkan file index pada folder category, folder admin pada views
        // "compact" untuk mengirim data $category
        // "compact('category') berarti mengirimkan data $category ke view index"
        // nama 'category' sesuai dengan nama variabel ($category)
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // untuk mengarahkan ke form create, biasanya digunakan pada tambah data
    public function create()
    {
        return view('admin.category.create');
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
            'name' => 'required|min:3'
            // required berarti wajib diisi, berarti nama wajib diisi minimal tiga huruf
        ]);

        $category = Category::create([
            'name' => $request->name,
            // 'name' sesuai dengan nama field pada tabel kategori, jadi 'name' akan mengambil data dari name. sesuai dengan model category
            'slug' => Str::slug($request->name)
            // jadi slug nanti diambil dari name diatas ( $request->name,)
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
        $category = Category::findorfail($id);

        return view('admin.category.edit', compact('category'));
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
            'name' => 'required'
        ]);

        $category_data = [
            'name' => $request->name,
            'slug' => Str::slug($request->name)
        ];

        Category::whereId($id)->update($category_data);

        return redirect()->route('category.index')->with('success','data berhasil di update');
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
        $category = Category::findorfail($id);
        $category->delete();

        return redirect()->back()->with('success', 'data berhasil dihapus');
    }
}
