<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pegawai;

class pegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::insert([
            'nama' => "Benny Wijaya",
            'divisi' => "Factory",
            'posisi' => "Manufacturer"
        ]);
        Pegawai::insert([
            'nama' => "Dalvin Ginting",
            'divisi' => "Factory",
            'posisi' => "Technical Logistic"
        ]);
        Pegawai::insert([
            'nama' => "Dedi Harmoko",
            'divisi' => "Factory",
            'posisi' => "Technical Operator"
        ]);
        Pegawai::insert([
            'nama' => "Dedy Sofyan",
            'divisi' => "Factory",
            'posisi' => "Technical Logistic"
        ]);
        Pegawai::insert([
            'nama' => "Hendrianto",
            'divisi' => "Factory",
            'posisi' => "Technical Logistic"
        ]);
        Pegawai::insert([
            'nama' => "Himinas",
            'divisi' => "Factory",
            'posisi' => "Quality Operator"
        ]);
        Pegawai::insert([
            'nama' => "Idris Purba",
            'divisi' => "Factory",
            'posisi' => "Manufacturer"
        ]);
        Pegawai::insert([
            'nama' => "Saimun",
            'divisi' => "Factory",
            'posisi' => "Manufacturer"
        ]);
    }
}
