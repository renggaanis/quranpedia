<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Category;
use App\DaftarSurat;
use App\User;
use App\Events;


 
class DashboardController extends Controller
{
     
    public function index(Posts $posts){
    	$category_widget = Category::all();
    	$data = $posts->latest()->take(6)->get();
    	return view('dashboard', compact('data', 'category_widget'));
    }

    public function daftarsurat(){
        $category_widget = Category::all();
       $daftarsurat = DaftarSurat::paginate(10);
        return view('web.daftarsurat',compact('daftarsurat' , 'category_widget'));
    }

    // public function surat1(){
    //     $category_widget = Category::all();
    //    $surat1 = Surat1::paginate(10);
    //     // $daftarsurat = DaftarSurat::all();
    //     return view('web.suratfrontend.surat1',compact('surat1', 'category_widget'));
    // }

    public function isi_web($slug){
    	$category_widget = Category::all();
    	$data = Posts::where('slug', $slug)->get();
    	return view('web.isi_post', compact('data', 'category_widget'));
    }

    public function isi_event($slug){
        $category_widget = Category::all();
        $data = Events::where('slug', $slug)->get();
        return view('web.isi_event', compact('data', 'category_widget'));
    }

    public function list_web(){
    	$category_widget = Category::all();

    	$data = Posts::latest()->paginate(5);
    	return view('web.list_post', compact('data', 'category_widget'));
    }
    public function list_event(){
        $category_widget = Category::all();

        $data = Events::latest()->paginate(5);
        return view('web.list_event', compact('data', 'category_widget'));
    }

    public function list_category(category $category){
        $category_widget = Category::all();
        
        $data = $category->posts()->paginate();
        return view('web.list_post', compact('data', 'category_widget'));
    }

    public function cari(request $request){
        $category_widget = Category::all();
        
        $data = Posts::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(6);
        return view('web.list_post', compact('data', 'category_widget'));
    }
    
}
