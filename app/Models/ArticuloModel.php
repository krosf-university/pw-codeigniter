<?php

namespace App\Models;

use CodeIgniter\Model;

class ArticuloModel extends Model
{
    protected $table = 'articulos';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $DBGroup = 'default';

    protected $allowedFields = ['titulo', 'descripcion', 'cuerpo'];
}
