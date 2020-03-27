<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Usuarios extends Migration
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
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'correo' => [
                'type' => 'VARCHAR',
                'constraint' => '80',
            ],
            'usuario' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'pass' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'codigo' => [
                'type' => 'VARCHAR',
                'constraint' => '50',
            ],
            'estado' => [
                'type' => 'BOOLEAN',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('usuarios');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('usuarios');
    }
}
