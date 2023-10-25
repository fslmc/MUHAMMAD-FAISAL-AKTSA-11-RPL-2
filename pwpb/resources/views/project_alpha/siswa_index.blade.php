<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <a href="{{route ('siswa.create')}}"><button>Create</button></a>
    <table border="1">
        <thead>
            <tr>
                <th>NIS</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>No. Telepon</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @isset($siswa)
                @foreach($siswa as $s)
                    <tr>
                        <td>{{ $s->nis }}</td>
                        <td>{{ $s->nama }}</td>
                        <td>{{ $s->jenis_kelamin }}</td>
                        <td>{{ $s->tempat_lahir }}</td>
                        <td>{{ $s->tanggal_lahir }}</td>
                        <td>{{ $s->no_telp }}</td>
                        <td>{{ $s->alamat }}</td>
                        <td>
                            <a href="{{ route('siswa.edit', ['id' => $s->id]) }}"><button>Edit</button></a>
                            <form action="{{ route('siswa.delete', ['id' => $s->id]) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus siswa ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endisset
        </tbody>
    </table>
</body>

</html>
