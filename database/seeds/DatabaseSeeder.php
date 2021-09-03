<?php


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(NegaraSeeder::class);
        $this->call(KotaSeeder::class);
        $this->call(SportsSeeder::class);
    }
}
