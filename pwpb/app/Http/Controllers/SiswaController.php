<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use RealRashid\SweetAlert\Facades\Alert;



class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('project_alpha.siswa_index', ['siswa' => $siswa]);

    }

    public function create(Request $request)
    {        
        // Validasi input form
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'no_telp' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',
        ]);

        // Simpan data ke database
        $siswa = new Siswa();
        $siswa->nis = $request->nis;
        $siswa->nama = $request->nama;
        $siswa->jenis_kelamin = $request->jenis_kelamin;
        $siswa->no_telp = $request->no_telp;
        $siswa->tempat_lahir = $request->tempat_lahir;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->alamat = $request->alamat;
        $siswa->save();

        // Redirect ke halaman lain atau tampilkan pesan sukses
        return redirect()->route('siswa.index'); 
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
    
        // Cek apakah data yang diinputkan sama dengan data yang ada di database
        if ($request->nis === $siswa->nis &&
            $request->nama === $siswa->nama &&
            $request->jenis_kelamin === $siswa->jenis_kelamin &&
            $request->tempat_lahir === $siswa->tempat_lahir &&
            $request->tanggal_lahir === $siswa->tanggal_lahir &&
            $request->no_telp === $siswa->no_telp &&
            $request->alamat === $siswa->alamat) {
            return redirect()->route('siswa.edit', ['id' => $request->id])->with('info', 'Tidak ada perubahan data.');
        }
    
        // Cek apakah NIS yang diubah sama dengan NIS yang sudah ada dalam database selain data dengan ID yang sedang diedit
        $existingSiswa = Siswa::where('nis', $request->nis)->where('id', '<>', $id)->first();
    
        if ($existingSiswa) {
            return back()->with('error', 'NIS sudah ada dalam database. Data tidak diperbarui.');
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
        Alert::success('BERHAIDHASI', 'DATA BERHASIL DAIHPUS');
        return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
    }

}