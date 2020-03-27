<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ArticulosSeed extends Seeder
{
    public function run()
    {
        $data = [
            [
                'titulo' => 'Elon Musk: Tesla, SpaceX, and the Quest for a Fantastic Future',
                'descripcion' => '[A] spirited and riveting biography.',
                'cuerpo' => 'B00KVI76ZS',
            ],
            [
                'titulo' => 'Steve Jobs: The Exclusive Biography ',
                'descripcion' => 'Based on more than forty interviews with Steve Jobs conducted over two years.',
                'cuerpo' => 'B005J3IEZQ',
            ],
        ];

        $this->db->table('articulos')->insertBatch($data);
    }
}
