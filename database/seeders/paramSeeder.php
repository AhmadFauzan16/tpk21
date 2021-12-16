<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\parameter;

class paramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        parameter::insert([
            'rating' => 'Belum Terbukti',
            'nilai' => '1'
        ]);
        parameter::insert([
            'rating' => 'Masih Lemah',
            'nilai' => '2'
        ]);
        parameter::insert([
            'rating' => 'Cukup',
            'nilai' => '3'
        ]);
        parameter::insert([
            'rating' => 'Kompeten',
            'nilai' => '4'
        ]);
        parameter::insert([
            'rating' => 'Sangat Memuaskan',
            'nilai' => '5'
        ]);
    }
}
