<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\Models\Deposito;

class DepositoApiController extends MasterApiController
{
    protected $model;
    public function __construct(Deposito $deposito, Request $request)
    {
        $this->model = $deposito;
        $this->request = $request;
    } 
    public function conta_corrente($id)   {
        if(!$data = $this->model->with('conta_corrente')->find($id)){
            return response()->json(['error'=>'Conta não encontrada'],401);
        }
        return response()->json($data);
    }    
}
