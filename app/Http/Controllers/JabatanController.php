<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jabatan = Jabatan::all();
        return view('jabatan.index',compact('jabatan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jabatan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Jabatan::create($request->all());
        return redirect()->route('jabatan')->with('success','Data berhasil di Tambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jabatan $jabatan)
    {
        //dd($request->all());
        // dd($jabatan);
        Jabatan::find($jabatan);

        return view('jabatan.edit',compact('jabatan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request ,Jabatan $jabatan)
    {
        Jabatan::find($jabatan);
        $jabatan->update($request->all());
        return redirect()->route('jabatan')->with('success','Data berhasil di Edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Jabatan $jabatan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jabatan $jabatan)
    {
        Jabatan::find($jabatan);
        $jabatan->delete();
        return redirect()->route('jabatan')->with('success','Data berhasil di Hapus');
    }
}
