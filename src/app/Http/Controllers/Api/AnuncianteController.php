<?php

namespace App\Http\Controllers\Api;

use App\Anunciante;
use App\Api;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AnuncianteController extends Controller
{
    private $anunciante;

    public function __construct(Anunciante $anunciante) {
        $this->anunciante = $anunciante;
    }

    public function index() {
        try {
            return response()->json($data = ['data' => $this->anunciante->paginate(10)]);
        }
        catch(\Exception $e) {
            if(config('app.debut')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação', 1010));
        }
    }

    public function show(Anunciante $id) {
        try {
            return response()->json($data = ['data' => $id]);
        }
        catch(\Exception $e) {
            if(config('app.debut')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação', 1010));
        }
    }

    public function store(Request $request) {
        try {
            $this->anunciante->create($data = $request->all());
            return response()->json(['msg' => 'Anunciante criado com sucesso!', 'status' => 201]);
        }
        catch(\Exception $e) {
            if(config('app.debug')) {
                return response()->json(ApiError::errorMessage($e->getMessage(), 'status' => 1010));
            }
            return response()->json(ApiError::errorMessage('Houve um erro ao realizar a operação', 'statu' => 1010));
        }
    }
}
