@extends('template')

@section('main')<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
      <div id="kelas">
      <h2>Edit Kelas</h2>
      </div>
      <form action="{{ url('kelas/' . $kelas->id . '/update') }}" method="post">

{{csrf_field()}}
      <div class="form-group">
      <label for="id" class="control-label">Id</label>
      <input name="id" type="text" class="form-control" value="{{$kelas->id}}">
      </div>

      <div class="form-group">
      <label for="nama_kelas" class="control-label">Nama</label>
      <input name="nama_kelas" type="text" class="form-control" value="{{$kelas->nama_kelas}}">
      </div>

      </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/kelas'">Kembali</button>

      </form>
      </div>

      </div>
        </div>
    </div>
</div>    
</div> 
@stop


