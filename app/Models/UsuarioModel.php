<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table = 'usuarios';
    protected $DBGroup = 'default';
    protected $primaryKey = 'id';
    protected $returnType = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'correo', 'usuario', 'pass', 'codigo', 'estado'];

    protected $beforeInsert = ['defaultValues'];

    public function login(array $data): bool
    {
        return !empty($this->db->table($this->table)->getWhere($data)->getResultArray());
    }

    protected function defaultValues(array $data)
    {
        if (isset($data['data']['codigo'])) {
            return $data;
        }
        $data['data']['codigo'] = '123456';

        return $data;
    }
}
