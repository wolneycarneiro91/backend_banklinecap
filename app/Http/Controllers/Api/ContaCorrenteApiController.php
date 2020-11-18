<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\Models\ContaCorrente;
class ContaCorrenteApiController extends MasterApiController
{
    protected $model;
    public function __construct(ContaCorrente $conta_corrente, Request $request)
    {
        $this->model = $conta_corrente;
        $this->request = $request;
    } 
    public function cliente($id)   {
        if(!$data = $this->model->with('cliente')->find($id)){
            return response()->json(['error'=>'Cliente não encontrado'],401);
        }
        return response()->json($data);
    }
    public function deposito($id)   {
        if(!$data = $this->model->with('deposito')->find($id)){
            return response()->json(['error'=>'Deposito não encontrado'],401);
        }
        return response()->json($data);
    }    
    public function saque($id)   {
        if(!$data = $this->model->with('saque')->find($id)){
            return response()->json(['error'=>'Saque não encontrado'],401);
        }
        return response()->json($data);
    }         
}
