<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Karyawan;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // DB::table('karyawan')->insert([
        //     [
        //         'nama' => 'John Doe',
        //         'alamat' => 'Jl. Merdeka No. 1',
        //         'jabatan' => 'Manager',
        //     ],
        //     [
        //         'nama' => 'Jane Smith',
        //         'alamat' => 'Jl. Sudirman No. 2',
        //         'jabatan' => 'Staff',
        //     ],
        //     [
        //         'nama' => 'Michael Johnson',
        //         'alamat' => 'Jl. Gatot Subroto No. 3',
        //         'jabatan' => 'Supervisor',
        //     ],
        // ]);

        Karyawan::insert([
            ['nama' => 'John Doe'],
            ['alamat' => 'Jl. Sudirman No. 2'],
            ['jabatan' => 'Staff'],
        ]);
    }
}
