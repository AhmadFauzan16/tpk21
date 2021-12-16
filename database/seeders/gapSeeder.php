<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\bobotgap;

class gapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        bobotgap::insert([
            'selisih' => '0',
            'bobotN' => '5',
            'ket' => 'Tidak ada selisih(Sesuai Kompetensi)'
        ]);
        bobotgap::insert([
            'selisih' => '1',
            'bobotN' => '4.5',
            'ket' => 'Kompetensi pegawai kelebihan 1 tingkat/level'
        ]);
        bobotgap::insert([
            'selisih' => '-1',
            'bobotN' => '4',
            'ket' => 'Kompetensi pegawai kekurangan 1 tingkat/level'
        ]);
        bobotgap::insert([
            'selisih' => '2',
            'bobotN' => '3.5',
            'ket' => 'Kompetensi pegawai kelebihan 1 tingkat/level'
        ]);
        bobotgap::insert([
            'selisih' => '-2',
            'bobotN' => '3',
            'ket' => 'Kompetensi pegawai kekurangan 1 tingkat/level'
        ]);
        bobotgap::insert([
            'selisih' => '3',
            'bobotN' => '2.5',
            'ket' => 'Kompetensi pegawai kelebihan 1 tingkat/level'
        ]);
        bobotgap::insert([
            'selisih' => '-3',
            'bobotN' => '2',
            'ket' => 'Kompetensi pegawai kekurangan 1 tingkat/level'
        ]);
        bobotgap::insert([
            'selisih' => '4',
            'bobotN' => '1.5',
            'ket' => 'Kompetensi pegawai kelebihan 1 tingkat/level'
        ]);
        bobotgap::insert([
            'selisih' => '-4',
            'bobotN' => '1',
            'ket' => 'Kompetensi pegawai kekurangan 1 tingkat/level'
        ]);
    }
}
