<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\MasterApiController;
use Illuminate\Http\Request;
use App\Models\Cliente;


class ClienteApiController extends MasterApiController
{
    protected $model;
    public function __construct(Cliente $clientes, Request $request)
    {
        $this->model = $clientes;
        $this->request = $request;
    }
    public function conta_corrente($id)   {
        if(!$data = $this->model->with('conta_corrente')->find($id)){
            return response()->json(['error'=>'Cliente não encontrado'],401);
        }
        return response()->json($data);
    }    
}
