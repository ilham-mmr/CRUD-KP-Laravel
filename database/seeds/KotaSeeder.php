<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KotaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kota')->insert([
            'negara_id' => 1,
            'nama' => 'Hallstat', 
        ]);
        DB::table('kota')->insert([
            'negara_id' => 1,
            'nama' => 'Vienna', 
        ]);

        DB::table('kota')->insert([
            'negara_id' => 2,
            'nama' => 'Stockholm', 
        ]);
        DB::table('kota')->insert([
            'negara_id' => 3,
            'nama' => 'Ciamis', 
        ]);
        DB::table('kota')->insert([
            'negara_id' => 3,
            'nama' => 'Banjar', 
        ]);
        DB::table('kota')->insert([
            'negara_id' => 3,
            'nama' => 'Bandung', 
        ]);
        DB::table('kota')->insert([
            'negara_id' => 3,
            'nama' => 'Tasikmalaya', 
        ]);
    }
}
