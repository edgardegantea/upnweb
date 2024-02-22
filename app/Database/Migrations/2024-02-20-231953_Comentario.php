<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Comentario extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id'            => ['type' => 'int', 'constraint' => 11, 'auto_increment' => true, 'unsigned' => true],
            'post'          => ['type' => 'int', 'constraint' => 11, 'auto_increment' => false, 'unsigned' => true],
            'nombre'        => ['type' => 'varchar', 'constraint' => 100],
            'comentario'    => ['type' => 'text'],
            'email'         => ['type' => 'varchar', 'constraint' => 100],
            'created_at'    => ['type' => 'datetime'],
            'updated_at'    => ['type' => 'datetime', 'null' => true],
            'deleted_at'    => ['type' => 'datetime', 'null' => true],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('post', 'posts', 'id');
        $this->forge->createTable('comentarios', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('comentarios', true);
    }
}
