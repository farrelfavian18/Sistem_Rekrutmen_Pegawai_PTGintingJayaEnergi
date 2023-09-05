<?php

namespace App\Http\Controllers;

use App\Models\Interview;
use App\Models\Pelamar;
use Illuminate\Http\Request;
use App\Models\Jabatan;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //$pelamar = Pelamar::all();
        $interview= Interview::with('jabatans')->get();
        //$interview= Pelamar::with('pelamars')->get();
        //$interview = Interview::with('pelamars')->get();
        //$pelamar =  Pelamar::with('interviews')->get();
        $interview = Interview::all();
        // dd($interview);
        return view('interview.index',compact('interview'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       // $interview = New Interview();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //Interview::create($request->all());
        $interview = New Interview();
        $interview->id_pelamar = $request->id_pelamar;
        $interview->id_jabatan = $request->id_jabatan;
        $interview->jadwal_interview = $request->jadwal_interview;
        $interview->seleksi_dokumen = $request->seleksi_dokumen;
        $interview->seleksi_rekrutmen = $request->seleksi_rekrutmen;
        return request();
    }

    /**
     * Display the specified resource.
     */
    // public function show(Interview $interview)
    // {
    //     return view('interview.edit',compact('interview'));
    //     //dd($interview);
    // }
    public function show(Interview $interview)
    {
        //dd($request->all());
        // dd($jabatan);
        Interview::find($interview);

        return view('interview.edit',compact('interview'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Interview $interview)
    {
        // Interview::find($interview);
        // $interview->update($request->all());
        // return redirect()->route('interview');
        // ('success','Data berhasil di Edit');
        Interview::find($interview);
        $interview->update($request->all());
        return redirect()->route('interview')->with('success','Pelamar berhasil di seleksi');
    }

    // public function destroy(Jabatan $jabatan)
    // {
    //     // Jabatan::find($jabatan);
    //     // $jabatan->delete();
    //     // return redirect()->route('jabatan')->with('success','Data berhasil di Hapus');
    // }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Interview $interview)
    {
        //
    }

    // public function shiftdata(){
    //     $pelamars= Pelamar::with('jabatans')->get();
    //     //$pelamars= Interview::with('pelamars')->get();
    //     $pelamars = Pelamar::get();
    //     // dd($pelamars);

    //     foreach ($pelamars as $key => $value) {
    //         Interview::create([
    //             'id_pelamar'=>$value->id,
    //             'id_jabatan'=>$value->id_jabatan,
    //             'nama_lengkap'=>$value->nama_lengkap,
    //         ]);
    //         # code...
    //     }
    //     //return view('interview.index',compact('interviews'));
    //     return redirect()->route('interview')->with('success','Data pegawai berhasil di perbaharui');
    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Interview $interview)
    {
        Interview::find($interview);
        $interview->delete();
        return redirect()->route('interview')->with('success','Pelamar berhasil di Hapus');
    }
}
