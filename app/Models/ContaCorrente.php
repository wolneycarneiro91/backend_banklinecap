<?php

namespace App\Models;
use App\Models\Cliente;
use App\Models\Deposito;
use App\Models\Saque;

use Illuminate\Database\Eloquent\Model;

class ContaCorrente extends Model
{
    protected $fillable =[
        'AG',
        'CC',
        'senha',
    ];

    public function rules(){
        return [
            'AG' => 'required|unique:conta_correntes',
            'CC' => 'required|unique:conta_correntes',
            'senha' => 'required'                     
        ];

    }   
    public function cliente(){
        return $this->belongsTo(Cliente::class,'cliente_id','id');
    } 
    public function deposito(){
        return $this->hasMany(Deposito::class,'conta_corrente_id','id');
    }      
    public function saque(){
        return $this->hasMany(Saque::class,'conta_corrente_id','id');
    }      
}
