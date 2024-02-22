<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categoria extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
            'titulo'        => ['type' => 'varchar', 'constraint' => 255, 'unique' => true],
            'descripcion'   => ['type' => 'text', 'null' => true],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('categorias', true);
    }

    public function down()
    {
        $this->forge->dropTable('categorias', true);
    }
}
