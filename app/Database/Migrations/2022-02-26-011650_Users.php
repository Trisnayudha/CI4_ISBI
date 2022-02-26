<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '120',
                'null'           => true,
            ],
            'phone'         => [
                'type'           => 'VARCHAR',
                'constraint'     => '120',
                'null'           => true,
            ],
            'role'      => [
                'type'           => 'ENUM',
                'constraint'     => ['admin', 'superadmin', 'editor'],
                'default'        => 'editor',
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '120',
                'null'           => true,
            ],
            'created_at' => [
                'type'          => 'DATETIME',
                'null'          => true
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => true
            ],
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
        $this->forge->dropTable('users');
    }
}
