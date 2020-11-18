<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saque extends Model
{
    protected $fillable =[
        'conta_corrente_id',
        'valor_saque'
    ];

    public function rules(){
        return [
            'valor_saque' => 'required'                  
        ];

    }   
    public function conta_corrente(){
        return $this->belongsTo(ContaCorrente::class,'conta_corrente_id','id');
    }       
}
