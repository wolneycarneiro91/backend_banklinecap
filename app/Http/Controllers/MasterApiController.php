<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\support\Facades\Storage;
use Illuminate\Routing\Controller as BaseController;

class MasterApiController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        $data = $this->model->all();
        return response()->json($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, $this->model->rules());
        $dataForm = $request->all();
        $data = $this->model->create($dataForm);
        return response()->json($data, 201);
    }

    public function show($id)
    {
        if (!$data = $this->model->find($id)) {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }
        return response()->json($data);
    }

    public function update(Request $request, $id)
    {                          
        if (!$data = $this->model->find($id)) {
            return response()->json(['error' => 'Registro não encontrado'], 404);
        }               
        $dataForm = $request->all();
        $data->update($dataForm);
        return response()->json($data);
    }

    public function destroy($id)
    {
        //
    }
}
