@extends('template')

@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
            <div id="guru">
            <h2>Detail Guru</h2>
            </div>

            <table class="table table-striped">
            <tr>
            <img src="{{asset('images/'.$guru->image) }}"></tr>
            <tr>
                  <th>NIP</th>
                  <td>{{ $guru->nip }}</td>
            </tr>

            <tr>
                  <th>Nama</th>
                  <td>{{ $guru->nama_guru }}</td>
            </tr>

            <tr>
                  <th>Tanggal Lahir</th>
                  <td>{{ $guru->tanggal_lahir }}</td>
            </tr>

            <tr>
                  <th>Jenis Kelamin</th>
                  <td>{{ $guru->jenis_kelamin }}</td>
            </tr>
            </table>
      </div>
      <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/guru'">Kembali</button>
      </div>
      </div>
      </div>
      </div>      
@stop


