<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pelamar;
use App\Models\Interview;
use Illuminate\Http\Request;

class PelamarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pelamar= Pelamar::with('jabatans')->get();
        $pelamar = Pelamar::all();
        return view('pelamar.index',compact('pelamar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $jabatan = Jabatan::all();
        return view('form.create',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        // Jabatan::all();

        //WORKS
        // Pelamar::create($request->all());
        // return request();


        //return redirect()->route('pelamar.index');
        // //$pelamar->jabatan = $request->jabatan;
        // // $pelamar = New Pelamar;
        // // $pelamar->$request->nama_lengkap;
        // // $pelamar->save();
        // // return redirect()->route('pelamar.index');

        $request->validate([
            'nama_lengkap' => 'required|min:1',
            'id_jabatan' => 'required',
            'tempat_lahir' => 'required',
            'umur' => 'required|min:1',
            'jenis_kelamin' => 'required',
            'alamat_rumah' =>'required|min:1',
            'pendidikan_terakhir' => 'required',
            'status' => 'required',
            'agama' => 'required',
            'nomor_ktp' => 'required',
            'scan_ktp' => 'required|mimes:jpg,jpeg,png,pdf|max:10240',
            'email' => 'required',
            'no_telp' => 'required',
            'no_kk' => 'required|min:4',
            'npwp' => 'required',
            'nama_sertifikat_migas'=>'required',
            'sertifikat_migas' => 'required|mimes:jpg,jpeg,png,pdf|max:10240',
            'cv' => 'required|mimes:jpg,jpeg,png,pdf|max:10240'
        ],[
            'nama_lengkap' => 'Masukan nama lengkap anda',
            'id_jabatan.required' => 'Diwajibkan memilih jabatan',
            'tempat_lahir' => 'Masukan tempat lahir',
            'umur' => 'Anda belum memasukan Umur anda',
            'jenis_kelamin' => 'Anda belum memasukan Jenis Kelamin anda',
            'alamat_rumah' => 'Alamat rumah belum diisi',
            'pendidikan_terakhir' =>'Pilih pendidikan terakhir anda',
            'status' => 'Pilih keadaan status anda sekarang',
            'nomor_ktp' => 'Masukan nomor KTP dengan baik dan sesuai fakta',
            'scan_ktp' => 'Masukan file Scan KTP, file dapat berupa jpg,jpeg,png,pdf Size Max : 10MB',
            'email' => 'Masukan alamat E-Mail aktif',
            'no_telp' => 'Masukan nomor telpon yang dapat dihubungi',
            'no_kk' => 'Isi nomor Kartu Keluarga',
            'npwp' => 'Masukan nomor NPWP anda dengan benar',
            'nama_sertifikat_migas'=>'Masukan nama Sertifikat sesuai file yang di upload',
            'sertifikat_migas' => 'Masukan file sertifikat, file dapat berupa jpg,jpeg,png,pdf Size Max : 10MB',
            'cv' => 'Masukan file dokumen CV anda, file dapat berupa jpg,jpeg,png,pdf Size Max : 10MB'
        ]);

        //WORKS V.2
        // Pelamar::create($request->all());
        // //return redirect('pelamars')->with('status','Berhasil mendaftar tunggu pengumuman interview!')
        // return request();
        $sertifikat = $request->file('sertifikat_migas');
        $nama_sertifikat = 'Sertifikat'.date('Ymdhis').'.'.$request->file('sertifikat_migas')->getClientOriginalExtension();
        $sertifikat->move('dokumen/',$nama_sertifikat);

        $cv = $request->file('cv');
        $nama_cv = 'CV'.date('Ymdhis').'.'.$request->file('cv')->getClientOriginalExtension();
        $cv->move('dokumen/',$nama_cv);

        $scan_ktp = $request->file('scan_ktp');
        $nama_scanktp = 'KTP'.date('Ymdhis').'.'.$request->file('scan_ktp')->getClientOriginalExtension();
        $scan_ktp->move('dokumen/',$nama_scanktp);

        $pelamar =new Pelamar();
        $pelamar->nama_lengkap = $request->nama_lengkap;
        $pelamar->id_jabatan = $request->id_jabatan;
        $pelamar->tempat_lahir = $request->tempat_lahir;
        $pelamar->tanggal_lahir = $request->tanggal_lahir;
        $pelamar->umur = $request->umur;
        $pelamar->jenis_kelamin = $request->jenis_kelamin;
        $pelamar->alamat_rumah = $request->alamat_rumah;
        $pelamar->pendidikan_terakhir = $request->pendidikan_terakhir;
        $pelamar->status = $request->status;
        $pelamar->agama = $request->agama;
        $pelamar->nomor_ktp = $request->nomor_ktp;
        $pelamar->scan_ktp = $nama_scanktp;
        $pelamar->email = $request->email;
        $pelamar->no_telp = $request->no_telp;
        $pelamar->no_kk = $request->no_kk;
        $pelamar->npwp = $request->npwp;
        $pelamar->nama_sertifikat_migas = $request->nama_sertifikat_migas;
        $pelamar->sertifikat_migas = $nama_sertifikat;
        $pelamar->masa_berlaku_sertifikat = $request->masa_berlaku_sertifikat;
        $pelamar->sim = $request->sim;
        $pelamar->pengalaman_kerja = $request->pengalaman_kerja;
        $pelamar->pengalaman_jabatan = $request->pengalaman_jabatan;
        $pelamar->masa_jabatan = $request->masa_jabatan;
        $pelamar->pengalaman_kerja2 = $request->pengalaman_kerja2;
        $pelamar->pengalaman_jabatan2 = $request->pengalaman_jabatan2;
        $pelamar->masa_jabatan2 = $request->masa_jabatan2;
        $pelamar->pengalaman_kerja3 = $request->pengalaman_kerja3;
        $pelamar->pengalaman_jabatan3 = $request->pengalaman_jabatan3;
        $pelamar->masa_jabatan3 = $request->masa_jabatan3;
        $pelamar->cv = $nama_cv;
        $pelamar->save();
        $id_pelamar = Pelamar::all()->last()->id;
        
        $interview = new Interview();
        $interview->id_pelamar = $id_pelamar;
        $interview->id_jabatan = $request ->id_jabatan;
        $interview->nama_lengkap = $request->nama_lengkap;
        $interview->save();
        return view('pelamar.accept',compact('id_pelamar'));

        // $interview = new Interview();
        // $interview->nama_lengkap = $request->nama_lengkap;
        // $interview->id_jabatan = $request->id_jabatan;
        // $interview->id_pelamar = $request->id_pelamar;
        // $interview->save();
        // return request();
        //return redirect('pelamar');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pelamar $pelamar)
    {
        $pelamar= Pelamar::with('jabatans')->get();
        Pelamar::find($pelamar);
        return view('pelamar.edit',compact('pelamar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,Pelamar $pelamar)
    {
        // Jabatan::find($jabatan);
        // $pelamar->jabatan
        Pelamar::find($pelamar);
        $pelamar->update($request->all());
        return redirect()->route('pelamar')->with('success','Data berhasil di Edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pelamar $pelamar)
    {
        //
    }
    public function accept(Pelamar $pelamar)
    {
        //$pelamar = Pelamar::all();
        Pelamar::find($pelamar);
        return view('pelamar.accept',compact('pelamar'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pelamar $pelamar)
    {
        
        Pelamar::find($pelamar);
        $pelamar->delete();
        return redirect()->route('pelamar')->with('success','Data berhasil di Hapus');
    }
}
