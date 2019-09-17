@extends('template')

@section('main')<div class="container">
    <div class="row mt-4">
        <div class="col-md-9">
            <div class="card">
            <div class="card-header" style="background-color: #C4B1AE;">
      <div id="walikelas">
      <h2>Edit Walikelas</h2>
      </div>
      <form action="{{ url('walikelas/' . $walikelas->id . '/update') }}" method="post">

{{csrf_field()}}
<div class="form-group">
        <label for="id_guru" class="control-label text-secondary">Nama Guru</label>
        <select required class="form-control col-md-4 col-form-label text-center" type="text" name="id_guru">
        @foreach ($guru_list as $g)
        <option value="{{$g->id}}">{{$g->nama_guru}}</option>
        @endforeach
        </select>
      </div>
      
<div class="form-group">
        <label for="id_kelas" class="control-label text-secondary">Nama Kelas</label>
        <select required class="form-control col-md-4 col-form-label text-center" type="text" name="id_kelas">
        @foreach ($kelas_list as $k)
        <option value="{{$k->id}}">{{$k->nama_kelas}}</option>
        @endforeach
        </select>
      </div>

      </div>
            <button type="submit" class="btn btn-dark">Submit</button>
            <button type="button"  class="btn btn-dark" onclick="window.location='http://localhost/siswa_laravel/public/walikelas'">Kembali</button>

      </form>
      </div>

      </div>
        </div>
    </div>
</div>    
</div> 
@stop


