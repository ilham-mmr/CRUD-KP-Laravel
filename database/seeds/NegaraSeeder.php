<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NegaraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('negara')->insert([
            'kode' => 'AT',
            'kode_iso3' => 'AUT',
            'nama' => 'Austria',
            'nama_inggris' => 'Austria',
            'lat' => 22,
            'lon' => 34,
            'kode_telepon' => '43', 
            'mata_uang' => 'EUR',
        ]);

        DB::table('negara')->insert([
            'kode' => 'SE',
            'kode_iso3' => 'SWE',
            'nama' => 'Swedia',
            'nama_inggris' => 'Sweden',
            'lat' => 22,
            'lon' => 34,
            'kode_telepon' => '46', 
            'mata_uang' => 'SEK',
        ]);

        DB::table('negara')->insert([
            'kode' => 'ID',
            'kode_iso3' => 'INA',
            'nama' => 'Indonesia',
            'nama_inggris' => 'Indonesia',
            'lat' => 22,
            'lon' => 34,
            'kode_telepon' => '62', 
            'mata_uang' => 'IDR',
        ]);
    }
}
