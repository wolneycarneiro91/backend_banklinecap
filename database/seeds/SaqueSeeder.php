<?php

use Illuminate\Database\Seeder;

class SaqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('saques')->insert([
            'conta_corrente_id' => 1,
            'valor_saque' => 100                      
        ]);           
    }
}
