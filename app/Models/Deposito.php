<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ContaCorrente;
class Deposito extends Model
{
    protected $fillable =[
        'conta_corrente_id',
        'valor_deposito'
    ];

    public function rules(){
        return [
            'valor_deposito' => 'required'                  
        ];

    }   
    public function conta_corrente(){
        return $this->belongsTo(ContaCorrente::class,'conta_corrente_id','id');
    }             
}
