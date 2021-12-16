<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kriteria_sub;

class subSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kriteria_sub::insert([
            'id_kriteria' => '1',
            'sub' => 'Safety',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '1',
            'sub' => 'Disiplin',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '1',
            'sub' => '5s',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '1',
            'sub' => 'Quality',
            'faktor' => 'SF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '1',
            'sub' => 'Productivity',
            'faktor' => 'SF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Mesin RF',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Mesin Folder',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Mesin Trust',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Mesin Crimping',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Compressor',
            'faktor' => 'SF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Crane',
            'faktor' => 'SF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Uppender',
            'faktor' => 'SF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '2',
            'sub' => 'Forklift',
            'faktor' => 'SF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '3',
            'sub' => 'Troubleshooting and Maintenance',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '3',
            'sub' => 'ROA and Yield',
            'faktor' => 'CF'
        ]);
        kriteria_sub::insert([
            'id_kriteria' => '3',
            'sub' => 'Training/Seminar/Workshop',
            'faktor' => 'SF'
        ]);


        
    }
}
