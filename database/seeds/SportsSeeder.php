<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SportsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sports = [
            [
                'name' => 'Basketball'
            ],
            [
                'name' => 'Weightlifting'
            ],
            [
                'name' => 'Tennis'
            ],
            [
                'name' => 'Swimming'
            ],
            [
                'name' => 'Rowing'
            ]
        ];

        DB::table('sports')->insert($sports);
    }
}
