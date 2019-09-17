@extends('template')

@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
            <div id="walikelas">
            <h2>Detail Walikelas</h2>
            </div>

            <table class="table table-striped">
            <tr>
                  <th>Nama Guru</th>
                  <td>{{ $walikelas->Guru->nama_guru }}</td>
            </tr>
            <tr>
                  <th>Nama Kelas</th>
                  <td>{{ !empty($walikelas->Kelas->nama_kelas) ?
                        $walikelas->Kelas->nama_kelas : '-'}}</td>
            </tr>
      </div>
      <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/walikelas'">Kembali</button>
      </div>
      </div>
      </div>
      </div>      
@stop


