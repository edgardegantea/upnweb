<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
{
    public function up()
    {

        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
            'categoria'     => ['type' => 'int', 'constraint' => 11, 'auto_increment' => false, 'unsigned' => true],
            'titulo'        => ['type' => 'varchar', 'constraint' => 255],
            'contenido'     => ['type' => 'text', 'null' => true],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('categoria', 'categorias', 'id');
        $this->forge->createTable('posts', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('posts', true);
    }
}
