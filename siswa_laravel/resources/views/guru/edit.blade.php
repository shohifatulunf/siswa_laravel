@extends('template')

@section('main')<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
      <div id="guru">
      <h2>Edit Guru</h2>
      </div>
      <form action="{{ url('guru/' . $guru->id . '/update') }}" method="post" enctype="multipart/form-data">

{{csrf_field()}}
      <div class="form-group">
      <label for="nip" class="control-label">NIP</label>
      <input name="nip" type="text" class="form-control" value="{{$guru->nip}}">
      </div>

      <div class="form-group">
      <label for="nama_guru" class="control-label">Nama</label>
      <input name="nama_guru" type="text" class="form-control" value="{{$guru->nama_guru}}">
      </div>

      <div class="form-group">

      <label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
      <input name="tanggal_lahir" type="date" class="form-control" value="{{$guru->tanggal_lahir}}">
      </div>

      <div class="form-group">
      <label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
@if ($guru->jenis_kelamin=="Perempuan")
      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" checked>
      <label class="form-check-label" for="jenis_kelamin"> Perempuan
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki">
      <label class="form-check-label" for="jenis_kelamin">
Laki-Laki
      </label>
      </div>
@elseif ($guru->jenis_kelamin=="Laki-laki")
      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan">
      <label class="form-check-label" for="jenis_kelamin"> Perempuan
      </label>
      </div>

      <div class="form-check">
      <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" checked>
      <label class="form-check-label" for="jenis_kelamin"> Laki-Laki
      </label>
      </div>
@endif
      </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/guru'">Kembali</button>

      </form>
      </div>

      </div>
        </div>
    </div>
</div>    
</div> 
@stop


