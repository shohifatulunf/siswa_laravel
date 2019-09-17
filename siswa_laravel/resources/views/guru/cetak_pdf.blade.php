<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr&x9JvoRxT2Mzw1T" crossorigin="anonymous">
    <title>Cetak PDF</title>
</head>
<body>
    <style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
    </style>

    <div>
    <center>
        <h5>Membuat Laporan PDF dengan DOMPDF Laravel</h5>
        <h6 target="_blank">DATA GURU SMK TELKOM MALANG</h6>
    </center>

    <table class="table table-bodered">
        <thead>
            <tr>
                <th>NIP</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
            </tr>
        </thead>
        <tbody>
            @php $i=1 @endphp
            @foreach($guru as $g)
            <tr>
                <td>{{$g->nip}}</td>
                <td>{{$g->nama_guru}}</td>
                <td>{{$g->tanggal_lahir}}</td>
                <td>{{$g->jenis_kelamin}}</td>
            </tr>
            @endforeach
        </tbody>

        </div>

    </table>
</body>
</html>