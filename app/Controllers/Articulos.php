<?php

namespace App\Controllers;

use App\Models\ArticuloModel;

class Articulos extends BaseController
{
    public function index($id = null)
    {
        $articuloModel = new ArticuloModel();
        if (is_null($id)) {
            return view('articulos', ['data' => $articuloModel->findAll()]);
        }

        return view('articulo', $articuloModel->find($id));
    }
}
