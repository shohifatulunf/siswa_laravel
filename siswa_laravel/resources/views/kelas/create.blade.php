@extends('template')
@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
            <div id="kelas">
            <h2>Tambah Kelas</h2>
            </div>
 <div class="card-body">
      <form action="{{ url('kelas') }}" method="post">
@csrf
      <div class="form-check">
      <label for="nama_kelas" class="control-label">Kelas</label>
      <input  type="text" class="form-control" name="nama_kelas">
      </div>

      <div>
      <button type="submit" class="btn btn-dark" name= "simpan">Simpan</button>
      <button type="button" class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/kelas'">Kembali</button>

      </form>
      </div>

</form>
</div>
</div>
        </div>
    </div>
</div>    
</div>    

@stop


