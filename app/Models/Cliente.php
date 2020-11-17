<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContaCorrente;
class Cliente extends Model
{
    protected $fillable =[
        'nome',
        'idade',
        'cpf_cnpj',
    ];

    public function rules(){
        return [
            'nome' => 'required',
            'idade' => 'required',
            'cpf_cnpj' => 'required|unique:clientes'            
        ];

    }
    public function conta_corrente(){
        return $this->hasMany(ContaCorrente::class,'cliente_id','id');
    }     
}
