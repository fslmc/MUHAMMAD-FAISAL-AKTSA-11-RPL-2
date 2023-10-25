<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT DATA SISWAIHNBF</title>
</head>
<body>
    <h1>INPURT DATA SISWA</h1>

    <form method="POST" action="{{ route('siswa.create') }}">
    @csrf
        Nis : <input type="text" name="nis" id="nis">
        Nama : <input type="text" name="nama" id="nama">
        <select name="jenis_kelamin" id="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        Tempat lahir : <input type="text" name="tempat_lahir" id="tempat_lahir" jenis="tempat_lahir">
        tanggal lahir : <input name="tanggal_lahir" name="tanggal_lahir" id="tanggal_lahir" type="date">
        no_telp : <input name="no_telp" id="no_telp" type="number"><br>
        Alamat : <textarea name="alamat" id="alamat" cols="10" rows="20"></textarea><br>    
        <button type="input">kirim</button>

    </form>
</body>
</html>