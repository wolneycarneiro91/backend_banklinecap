<?php

use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        DB::table('clientes')->insert([
            'nome' => 'Wolney Cesar Carneiro',
            'sexo' => 1,
            'idade' => 29,
            'cpf_cnpj' => Str::random(10)
        ]);        
    }
}
