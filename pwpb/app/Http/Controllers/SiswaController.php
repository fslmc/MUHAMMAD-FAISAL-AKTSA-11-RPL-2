<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;


class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('project_alpha.siswa_index', ['siswa' => $siswa]);

    }

    public function create(Request $request)
    {
        // Validasi data yang dikirim dari formulir
        $validatedData = $request->validate([
            'nis' => 'required|unique:siswa', 
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        // Simpan data siswa ke dalam database
        Siswa::create($validatedData);

        // Redirect kembali ke halaman input dengan pesan sukses
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil disimpan');
    }

    public function edit($id)
    {
        // Mengambil data siswa berdasarkan ID
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return abort(404); // Menghasilkan halaman 404 jika data tidak ditemukan
        }

        // Menampilkan halaman pengeditan siswa (misalnya, siswa_update.blade.php) dengan data siswa
        return view('project_alpha.siswa_update', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data yang dikirim dari formulir
        $this->validate($request, [
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
        ]);

        // Ambil data siswa berdasarkan ID
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return abort(404); // Tampilkan halaman 404 jika data siswa tidak ditemukan
        }

        // Simpan perubahan data siswa
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->no_telp = $request->no_telp;
        $siswa->alamat = $request->alamat;

        $siswa->save();

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diperbarui.');
    }


    public function destroy($id)
    {
        // Cari data siswa berdasarkan ID
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return abort(404); // Tampilkan halaman 404 jika data siswa tidak ditemukan
        }

        // Hapus data siswa
        $siswa->delete();

        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }

}