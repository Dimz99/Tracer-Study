<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlumniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('alumnis')->insert([
            'nama' => 'Dimas Dwi',
            'NIM' => '123456',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('12345678'),
            'telepon' => '08712312893721',
            'gender' => 'L',
            'thn_masuk' => '2017',
            'thn_keluar' => '2023',
            'prodi' => 'TI',
            'Fakultas' => 'FTI',
            'Alamat' => 'Blitar'
        ]);
    }
}
