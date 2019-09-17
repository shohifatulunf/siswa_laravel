<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Registrasi</title>
    <style>
        form,h1{
            margin-left: 38%;
            }
    </style>
    <script>
    </script>
</head>
<body>
    <h1>FORM REGISTRASI</h1>
    <form action="" method="">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama</label>
                </td>
                <td> : </td>
                <td>
                    <input type="text" name="namadepan" id="nama">
                </td>
            </tr>
            <tr>
                <td>
                        <label for="nis">NIS</label>
                    </td>
                    <td> : </td>
                    <td>
                        <input type="text" name="nis" id="nis">
                    </td>
            </tr>
                <tr>
                        <td>
                            <label for="kelas">Kelas</label>
                            </td>
                            <td> : </td>
                            <td>
                                <select name="kelas" id="kelas">
                                    <option value= "">Pilih Kelas</option>
                                    <option value="10">X</option>
                                    <option value="11">XI</option>
                                    <option value="12">XII</option>
                                  </select>
                                </td>
                    </tr>
                    <tr>
                    <td>
                            <label for="jurusan"> Jurusan </label>
                        </td>
                        <td> : </td>
                        <td>
                        <select name="jurusan" id="jurusan">
                                    <option value= "">Pilih Jurusan</option>
                                    <option value="rpl">RPL</option>
                                    <option value="tkj">TKJ</option>
                                  </select>
                        </td>
                </tr>
                <tr>
                <td>
                        <label for="alamat">Alamat</label>
                    </td>
                    <td> : </td>
                    <td>
                        <input type="text" name="alamat" id="alamat">
                    </td>
            </tr>
                    <tr>
                        <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <button type="button" onclick="validasi()">SAVE</button>
                            <button type="button" onclick="validasi()">CANCEL</button>
                        </td>
                        </tr>
                    </tr>
        </table>
    </form>
</body>
</html>