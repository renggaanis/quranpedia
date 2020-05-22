<?php

namespace App\Http\Controllers;

use App\User;
use App\Events;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $event = Events::paginate(10);
        return view('admin.event.index', compact('event'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.event.create');
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
            'judul' => 'required',
            'content' => 'required',
            'gambar' => 'required' 
        ]);

        $gambar = $request->gambar;
        $new_gambar = time().$gambar->getClientOriginalName();

        $event = Events::create([
            'judul' => $request->judul,
            'content' => $request->content,
            'gambar' => 'public/uploads/events/'.$new_gambar,
            'slug' => Str::slug($request->judul),
            'users_id' => Auth::id()
        ]);

        $gambar->move('public/uploads/events/', $new_gambar);
        return redirect()->route('event.index')->with('success', 'postingan anda berhasil disimpan');
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
        $event = Events::findorfail($id);
        return view('admin.event.edit', compact('event'));
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
            'judul' => 'required'
        ]);

        $event = Events::findorfail($id);

        if ($request->has('gambar')) {
            $gambar = $request->gambar;
            $new_gambar = time().$gambar->getClientOriginalName();
            $gambar->move('public/uploads/events/', $new_gambar);

             $event_data = [
            'judul' => $request->judul,
            'content' => $request->content,
            'gambar' => 'public/uploads/events/'.$new_gambar,
            'slug' => Str::slug($request->judul)
        ];
        }
        else {
            $event_data = [
            'judul' => $request->judul,
            'content' => $request->content,
            'slug' => Str::slug($request->judul)
        ];  
        }

        $event->update($event_data);

        return redirect()->route('event.index')->with('success', 'postingan anda berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Events::findorfail($id);
        $event->delete();

        return redirect()->back()->with('success', 'postingan event berhasil dihapus');
    }
}
