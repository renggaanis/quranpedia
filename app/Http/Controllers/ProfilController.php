<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view('admin.profil.index', compact('user'));    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.profil.create');
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
        $user = User::findorfail($id);
        return view('admin.profil.edit', compact('user'));
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
            'name' => 'required'
        ]);

        $user = User::findorfail($id);

        if ($request->has('avatar')) {
            $avatar = $request->avatar;
            $new_avatar = time().$avatar->getClientOriginalName();
            $avatar->move('public/uploads/avatar/', $new_avatar);

             $user_data = [
            'name' => $request->name,
            'email' => $request->email,
            'avatar' => 'public/uploads/avatar/'.$new_avatar
        ];
        }
        else {
            $user_data = [
            'name' => $request->name,
            'email' => $request->email
        ];  
        }

        $user->update($user_data);

        return redirect()->route('profil.index')->with('success', 'profile anda berhasil diupdate');
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

    // public function profile($id)
    // {
    //     $user = User::findorfail($id);
    //     return view('admin.user.profile', ['user'=> $user]);
    // }

    
    // public function profilepelanggan($id)
    // {
    //     $user = User::all();
    //     return view('admin.profilbackend', compact('user'));
    // }
}
