<?php

use Illuminate\Database\Seeder;

class DepositoSeeder extends Seeder
{

    public function run()
    {
        DB::table('depositos')->insert([
            'conta_corrente_id' => 1,
            'valor_deposito' => 100,       
            'created_at' =>'2020-11-17 00:00:02'              
        ]);          
    }
}
