<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Articulos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'titulo' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'descripcion' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'cuerpo' => [
                'type' => 'TEXT',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('articulos');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('articulos');
    }
}
