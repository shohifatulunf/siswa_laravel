<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Kelas;
use PDF;

class siswacontroller extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function siswa(){
        $halaman = 'siswa';
        $siswa_list = Siswa::all();                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           return view('siswa.index', compact('halaman','siswa_list'));
    }

    public function _construct(){
        $this->middleware('auth');
    }
    
    public function create(){
        $kelas_list = Kelas::all();
        $halaman = 'siswa';
        return view('siswa.create', compact('halaman', 'kelas_list'));
    }

    public function store(Request $request)
    {
        Siswa::create($request->all());
        return redirect('siswa');
    }

    public function show($id){
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $kelas_list = Kelas::all();        
        return view('siswa.show', compact('halaman', 'siswa', 'kelas_list'));
    }

    public function edit($id){
        $kelas_list = Kelas::all();
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        return view('siswa.edit', compact('halaman', 'siswa', 'kelas_list'));
    }

    public function update($id, Request $request)
    {
        $halaman ='siswa';
        $siswa = Siswa::findOrFail($id);
        $siswa->nisn = $request->nisn;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        if($request->hasFile('image')){
            $request->file('image')->move('images/',$request->file('image')->getClientOriginalName());
            $siswa->image = $request->file('image')->getClientOriginalName();
            $siswa->save();
        }
        $siswa->save();
        return redirect('siswa');
    }

    public function delete($id){
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }

    public function cetak_pdf(){
        $siswa = Siswa::all();
        $pdf = PDF::loadview('siswa.cetak_pdf',['siswa'=>$siswa]);
        return $pdf->download('laporan-siswa.pdf');
    }    
}