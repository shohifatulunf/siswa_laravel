@extends('template')

@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <div class="card">
    <div class="card-header" style="background-color: #C4B1AE;">
        <h2 class="card-title"> Data Walikelas </h2>
    </div>

  @if (!empty($walikelas_list))
  <div class="card-body">
    <a href="{{ url('walikelas/create') }}" class="btn btn-outline-dark mb-2">
      + Tambah walikelas
    </a>
    <a href="{{url('walikelas/cetak_pdf')}}" target="_blank" class="btn btn-outline-dark mb-2">
      Cetak PDF
    </a>

    <table class="table table-striped">
      <thead style="background-color: #C4B1AE;">
        <tr>
          <th>Nama Guru</th>
          <th>Nama Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

      <?php $i=0;?>
    @foreach($walikelas_list as $walikelas)
    <tr> 
      <td><a href="{{ url('guru/'. $walikelas->id_guru) }}" class="text-dark"> {{ $walikelas->Guru->nama_guru }}</a></td>
      <td><a href="{{ url('kelas/'. $walikelas->id_kelas) }}" class="text-dark"> {{ !empty($walikelas->Kelas->nama_kelas) ?
      $walikelas->Kelas->nama_kelas : '-'}}</a></td>
      <td>
      <a class="btn btn-success btn-sm" href="{{ url('walikelas/' . $walikelas->id) }}">Detail</a>
      <a class="btn btn-warning btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/edit') }}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{ url('walikelas/' . $walikelas->id . '/delete') }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      <?php $i++;?>
      </td>
    </tr>
    @endforeach
    
    </tbody>
    
    </table>

    <center><button type="" class="btn btn-secondary"><h6><u>Jumlah : {{$i}}</u></h6></button></center>
    <br>

  @else
    <p>Tidak ada data walikelas.</p>
  @endif
</div>
@stop

@section('footer')
  <div id="footer">
    <p>&copy; 2019 Belajar_laravel</p>
  </div>
  </div>
</div>
        </div>
    </div>
</div>
@stop


