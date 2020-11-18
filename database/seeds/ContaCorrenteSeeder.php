<?php

use Illuminate\Database\Seeder;

class ContaCorrenteSeeder extends Seeder
{

    public function run()
    {
        DB::table('conta_correntes')->insert([
            'cliente_id' => 1,
            'AG' => 3306,
            'CC' => '5536789451',            
            'saldo' => 5000   
        ]);          
    }
}
