@extends('template')

@section('main')
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
        <div class="card">
    <div class="card-header" style="background-color: #C4B1AE;">
        <h2 class="card-title"> Data Siswa</h2>
    </div>

  @if (!empty($siswa_list))
  <div class="card-body">
    <a href="{{ url('siswa/create') }}" class="btn btn-outline-dark mb-2">
      + Tambah Siswa
    </a>
    <a href="{{url('siswa/cetak_pdf')}}" target="_blank" class="btn btn-outline-dark mb-2">
      Cetak PDF
    </a>
    
    <table class="table table-striped">
      <thead style="background-color: #C4B1AE;">
        <tr>
          <th>NISN</th>
          <th>Nama</th>
          <th>Tanggal Lahir</th>
          <th>Jenis Kelamin</th>
          <th>Kelas</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
    <?php $i=0;?> 
    @foreach($siswa_list as $siswa)
    <tr>
      <td>{{ $siswa->nisn}}</td>
      <td>{{ $siswa->nama_siswa}}</a></td>
      <td>{{ $siswa->tanggal_lahir}}</td>
      <td>{{ $siswa->jenis_kelamin}}</td>
      <td>{{ ! empty($siswa->kelas->nama_kelas) ?
          $siswa->kelas->nama_kelas : '-' }}</td>
      <td>
      <a class="btn btn-success btn-sm" href="{{ url('siswa/' . $siswa->id) }}">Detail</a>
      <a class="btn btn-warning btn-sm" href="{{ url('siswa/' . $siswa->id . '/edit') }}">Edit</a>
      <a class="btn btn-danger btn-sm" href="{{ url('siswa/' . $siswa->id . '/delete') }}" onclick="return confirm('Apakah Anda yakin ingin menghapus data?')">Hapus</a>
      <?php $i++;?>
      </td>
    </tr>
    @endforeach
    
    </tbody>
    
    </table>
    <center><button type="" class="btn btn-secondary"><h6><u>Jumlah : {{$i}}</u></h6></button></center>
    <br>
  @else
    <p>Tidak ada data siswa.</p>
  @endif
</div>
@stop

@section('footer')
  <div id="footer">
    <p>&copy; 2019 Belajar_laravel</p>
  </div>

@stop


