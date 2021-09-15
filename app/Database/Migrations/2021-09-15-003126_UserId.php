<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserId extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 33,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('user');
    }

    public function down()
    {
        $this->forge->dropTable('user');
    }
}
