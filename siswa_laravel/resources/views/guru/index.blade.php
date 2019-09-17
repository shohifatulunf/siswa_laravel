@extends('template')

@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <div class="card">
    <div class="card-header" style="background-color: #C4B1AE;">
        <h2 class="card-title"> Data Guru </h2>
    </div>

  @if (!empty($guru_list))
  <div class="card-body">
    <a href="{{ url('guru/create') }}" class="btn btn-outline-dark mb-2">
      + Tambah Guru
    </a>
    <a href="{{url('guru/cetak_pdf')}}" target="_blank" class="btn btn-outline-dark mb-2">
      Cetak PDF
    </a>

    <table class="table table-striped">
      <thead style="background-color: #C4B1AE;">
        <tr>
          <th>NIP</th>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>

    <?php $i=0;?>
    @foreach($guru_list as $guru)
    <tr>
      <td>{{ $guru->nip}}</td>
      <td>{{ $guru->nama_guru}}</td>
      <td>{{ $guru->tanggal_lahir}}</td>
      <td>{{ $guru->jenis_kelamin}}</td>
      <td>
      <a class="btn btn-success btn-sm" href="{{ url('guru/' . $guru->id) }}">Detail</a>
      <a class="btn btn-warning btn-sm" href="{{ url('guru/' . $guru->id . '/edit') }}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{ url('guru/' . $guru->id . '/delete') }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      <?php $i++;?>
      </td>
    </tr>
    @endforeach
    
    </tbody>
    
    </table>

    <center><button type="" class="btn btn-secondary"><h6><u>Jumlah : {{$i}}</u></h6></button></center>
    <br>

  @else
    <p>Tidak ada data guru.</p>
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


