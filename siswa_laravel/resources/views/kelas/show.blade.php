@extends('template')

@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
            <div id="kelas">
            <h2>Detail Kelas</h2>
            </div>

            <table class="table table-striped">
            <tr>
                  <th>Id</th>
                  <td>{{ $kelas->id }}</td>
            </tr>

            <tr>
                  <th>Nama Kelas</th>
                  <td>{{ $kelas->nama_kelas }}</td>
            </tr>
            </table>
      </div>
      <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/kelas'">Kembali</button>
      </div>
      </div>
      </div>
      </div>      
@stop


