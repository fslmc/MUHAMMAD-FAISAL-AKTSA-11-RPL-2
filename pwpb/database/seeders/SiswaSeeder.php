<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
use Illuminate\Support\facades\DB;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswa::create([
            'nis' => '777666',
            'nama' => 'myname',
            'jenis_kelamin' => 'Perempuan',
            'tempat_lahir' => 'test@example.com',
            'tanggal_lahir' => '2007-07-07',
            'alamat' => 'test@exampl.com',
            'no_telp' => 'test@example.com'
        ]);
    }
}
