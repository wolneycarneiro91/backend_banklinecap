<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\MasterApiController;
use App\Models\Saque;

class SaqueApiController extends MasterApiController
{
    protected $model;
    public function __construct(Saque $saque, Request $request)
    {
        $this->model = $saque;
        $this->request = $request;
    } 
    public function conta_corrente($id)   {
        if(!$data = $this->model->with('conta_corrente')->find($id)){
            return response()->json(['error'=>'Conta não encontrada'],401);
        }
        return response()->json($data);
    }      
}
