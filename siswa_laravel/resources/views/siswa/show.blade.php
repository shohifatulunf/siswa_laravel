@extends('template')

@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
            <div id="siswa">
            <h2>Detail Siswa</h2>
            </div>

            <table class="table table-striped">
            <tr>
                  <img class="rounded" src="{{asset('images/'.$siswa->image)}}" width="300px" height="auto">
            </tr>

            <br>

            <tr>
                  <th>NISN</th>
                  <td>{{ $siswa->nisn }}</td>
            </tr>

            <tr>
                  <th>Nama</th>
                  <td>{{ $siswa->nama_siswa }}</td>
            </tr>

            <tr>
                  <th>Tanggal Lahir</th>
                  <td>{{ $siswa->tanggal_lahir }}</td>
            </tr>

            <tr>
                  <th>Jenis Kelamin</th>
                  <td>{{ $siswa->jenis_kelamin }}</td>
            </tr>
            <tr>
                  <th>Kelas</th>
                  <td>{{ ! empty($siswa->kelas->nama_kelas) ?
                      $siswa->kelas->nama_kelas : '-' }}</td>
            </tr>
            </table>
      </div>
      <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/siswa'">Kembali</button>
      </div>
      </div>
      </div>
      </div>      
@stop


