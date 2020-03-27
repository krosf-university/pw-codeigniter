<?php

namespace App\Controllers;

class Productos extends BaseController
{
    public function index()
    {
        return view('template', ['title' => 'Esto es la portada de productos']);
    }

    public function ordenadores(string $marca = null, string $modelo = null)
    {
        $title = 'Mostrando ordenadores de marca '.$marca.' y modelo '.$modelo;
        if (is_null($marca) && is_null($modelo)) {
            $title = 'Aquí se muestran los productos de ordenadores';
        } elseif (is_null($modelo)) {
            $title = 'Mostrando ordenadores de marca '.$marca;
        }

        return view('template', ['title' => $title]);
    }

    public function monitores(): string
    {
        return view('template', ['title' => 'Aquí se muestran los productos de monitores']);
    }

    public function perifericos($modelo): string
    {
        return view('template', ['title' => 'Estás viendo el periférico '.$modelo]);
    }
}
