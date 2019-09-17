<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Walikelas;
use App\Kelas;
use App\Guru;
use PDF;

class walikelascontroller extends Controller
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
    public function walikelas(){
        $halaman = 'walikelas';
        $walikelas_list = Walikelas::all();
        return view('walikelas.index', compact('halaman', 'walikelas_list'));                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        return view('siswa.index', compact('halaman','siswa_list'));
    }

    public function _construct(){
        $this->middleware('auth');
    }
    
    public function create(){
        $halaman = 'walikelas';
        $guru_list = Guru::all();
        $kelas_list = Kelas::all();        
        return view('walikelas.create', compact('halaman', 'guru_list', 'kelas_list'));
    }

    public function store(Request $request)
    {
        Walikelas::create($request->all());
        return redirect('walikelas');
    }

    public function show($id){
        $halaman = 'walikelas';
        $walikelas = walikelas::findOrFail($id);
        return view('walikelas.show', compact('halaman', 'walikelas'));
    }

    public function edit($id, Request $request){
        $halaman = 'walikelas';
        $walikelas = Walikelas::findOrFail($id);
        $guru_list = Guru::all();
        $kelas_list = Kelas::all();  
        return view('walikelas.edit', compact('halaman', 'walikelas', 'kelas_list', 'guru_list'));
    }

    public function update($id, Request $request)
    {
        $halaman ='walikelas';
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->id_kelas = $request->id_kelas;
        $walikelas->id_guru = $request->id_guru;
        $walikelas->save();
        return redirect('walikelas');
    }

    public function delete($id){
        $walikelas = Walikelas::findOrFail($id);
        $walikelas->delete();
        return redirect('walikelas');
    }
    
    public function cetak_pdf(){
        $walikelas = Walikelas::all();
        $pdf = PDF::loadview('walikelas.cetak_pdf',['walikelas'=>$walikelas]);
        return $pdf->download('laporan-walikelas.pdf');
    } 
}