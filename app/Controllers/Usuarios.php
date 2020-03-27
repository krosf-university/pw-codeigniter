<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Usuarios extends BaseController
{
    public function index()
    {
        if ($this->request->getPost('submit')) {
            $usarioModel = new UsuarioModel();
            $data = $this->request->getPost(['usuario', 'pass']);
            if ($usarioModel->login($data)) {
                $this->session->set(['usuario' => $data['usuario']]);

                return redirect()->to('/articulos');
            }

            return view('login', ['errors' => 'El usuario o constraseñas son incorrectos']);
        }

        return view('login');
    }

    public function registro()
    {
        $rules = [
            'nombre' => [
                'label' => 'nombre',
                'rules' => 'required',
                'errors' => ['required' => 'El {field} es obligatorio.'],
            ],
            'correo' => [
                'label' => 'correo',
                'rules' => 'required|valid_email|trim',
                'errors' => ['required' => 'El {field} es obligatorio.', 'valid_email' => 'Email no valido'],
            ],
            'usuario' => [
                'label' => 'usuario',
                'rules' => 'required|trim|is_unique[usuarios.usuario]',
                'errors' => ['required' => 'El {field} es obligatorio.', 'is_unique' => 'El usario {value} ya existe.'],
            ],
            'pass' => [
                'label' => 'Contraseña',
                'rules' => 'required|trim',
                'errors' => ['required' => 'El {field} es obligatorio.'],
            ],
            'pass2' => [
                'label' => 'Confirmacion de Contraseña',
                'rules' => 'required|trim|matches[pass]',
                'errors' => ['required' => 'El {field} es obligatorio.', 'maches' => 'El campo {field} debe se igual que {field}'],
            ],
        ];

        if (!$this->validate($rules)) {
            return view('signin', ['errors' => $this->request->getPostGet('submit') ? $this->validator->listErrors() : '']);
        }

        $usarioModel = new UsuarioModel();
        $usarioModel->insert($this->request->getPost());

        return view('signin', ['mensaje' => 'El usuario se ha registrado correctamente.']);
    }
}
