@extends('template')
@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
            <div id="siswa">
            <h2>Tambah Siswa</h2>
            </div>
 <div class="card-body">
      <form action="{{ url('siswa') }}" method="post">
@csrf
      <div class="form-group">
      <label for="nisn" class="control-label">NISN</label>
      <input name="nisn" type="text" class="form-control" placeholder="create your NISN..">
      </div>

      <div class="form-group">
      <label for="nama_siswa" class="control-label">Nama</label>
      <input name="nama_siswa" type="text" class="form-control" placeholder="write your Name..">  
      </div>

      <div class="form-group">
      <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
      <input name="tanggal_lahir" type="date" class="form-control"></div>
      <div class="form-group">

      <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" checked>
      <label class="form-check-label" for="jenis_kelamin">  Perempuan</label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">
      <label class="form-check-label" for="jenis_kelamin">Laki-Laki</label>
      </div>
      

      <div class="form-check">
      <label for="id_kelas" class="controllabel">Kelas</label>
      <select name="id_kelas" id="" class="custom-select" class="form-control">
      <option selected>Kelas..</option>
      @foreach($kelas_list as $kelas)
      <option value="{{ $kelas->id }}">{{$kelas->nama_kelas}}</option>
      @endforeach
      </select>
      </div>

      <div class="form-group">
      <label for="image" class="control-label">Gambar</label>
      <input name="image" type="file" class="form-control">
      </div>
      
      <div>
      <button type="submit" class="btn btn-secondary" name= "simpan">Simpan</button>
      <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/siswa'">Kembali</button>
      </div>

      </form>
    </div>
</div>
</div>
</div>
</div>    
@stop


