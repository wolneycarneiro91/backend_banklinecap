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
        $this->call(ClienteSeeder::class);
        $this->call(ContaCorrenteSeeder::class);
        $this->call(DepositoSeeder::class);
        $this->call(SaqueSeeder::class);
    }
}
