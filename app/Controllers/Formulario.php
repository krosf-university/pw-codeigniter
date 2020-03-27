<?php

namespace App\Controllers;

use App\Models\ArticuloModel;

class Formulario extends BaseController
{
    public function index()
    {
        $messages = [
            'required' => 'El campo {field} es obligatorio',
            'max_length' => 'El campo {field} tiene como máximo {param} caracteres.',
        ];
        $rules = [
            'titulo' => ['label' => 'título del artículo', 'rules' => 'required|max_length[100]', 'errors' => $messages],
            'descripcion' => ['label' => 'descripción del artículo', 'rules' => 'required|max_length[200]', 'errors' => $messages],
            'cuerpo' => ['label' => 'cuerpo del artículo', 'rules' => 'required', 'errors' => ['required' => $messages['required']]],
        ];

        if (!$this->validate($rules)) {
            return view('formulario', [
                'errors' => $this->request->getPostGet('submit') ? $this->validator->listErrors() : '',
            ]);
        }

        $articuloModel = new ArticuloModel();
        $data = $this->request->getPost();
        $articuloModel->insert($data);

        return view('articulo', $data);
    }
}
