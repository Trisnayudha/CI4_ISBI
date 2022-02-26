<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Berita extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'title'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'deskripsi'       => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
            'kategori_id'         => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
            ],
            'user_id'      => [
                'type'           => 'INT',
                'constraint'     => 100,
                'unsigned'       => true,
            ],
            'slug' => [
                'type'           => 'VARCHAR',
                'null'           => true,
                'constraint'     => '255'
            ],
            'thumbl' => [
                'type'           => 'VARCHAR',
                'null'           => true,
                'constraint'     => '255'
            ],
            'status'      => [
                'type'           => 'ENUM',
                'constraint'     => ['published', 'draft'],
                'default'        => 'draft',
            ],
            'created_at'        => [
                'type'          => 'DATETIME',
                'null'          => true
            ],
            'updated_at' => [
                'type'          => 'DATETIME',
                'null'          => true
            ]
        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('berita', TRUE);
    }

    public function down()
    {
        // menghapus tabel news
        $this->forge->dropTable('berita');
    }
}
