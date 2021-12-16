<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\kriteria;

class kriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        kriteria::insert([
            'kriteria' => "Internal Skill",
            'bobot' => "50",
            'bobotCF' => "60",
            'bobotSF' => "40"
        ]);
        kriteria::insert([
            'kriteria' => "Technical Skill",
            'bobot' => "40",
            'bobotCF' => "80",
            'bobotSF' => "20"
        ]);
        kriteria::insert([
            'kriteria' => "Utilities SKill",
            'bobot' => "10",
            'bobotCF' => "70",
            'bobotSF' => "30"
        ]);
    }
}
