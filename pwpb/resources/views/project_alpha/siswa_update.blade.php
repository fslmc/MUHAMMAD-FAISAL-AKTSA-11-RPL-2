<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h1>EDIT DATA SISWA</h1>
    <form method="POST" action="{{ route('siswa.update', ['id' => $siswa->id]) }}">
        @csrf
        @method('PUT') <!-- Method override untuk mengubah data -->

        <label for="nis">Nis :</label>
        <input type="text" name="nis" id="nis" value="{{ $siswa->nis }}">
        <br>

        <label for="nama">Nama :</label>
        <input type="text" name="nama" id="nama" value="{{ $siswa->nama }}">
        <br>

        <label for="jenis_kelamin">Jenis Kelamin :</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-laki" {{ $siswa->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
            <option value="Perempuan" {{ $siswa->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
        </select>
        <br>

        <label for="tempat_lahir">Tempat Lahir :</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir" value="{{ $siswa->tempat_lahir }}">
        <br>

        <label for="tanggal_lahir">Tanggal Lahir :</label>
        <input type="date" name="tanggal_lahir" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir }}">
        <br>

        <label for="no_telp">No. Telepon :</label>
        <input type="number" name="no_telp" id="no_telp" value="{{ $siswa->no_telp }}">
        <br>

        <label for="alamat">Alamat :</label>
        <textarea name="alamat" id="alamat" cols="10" rows="20">{{ $siswa->alamat }}</textarea>
        <br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
