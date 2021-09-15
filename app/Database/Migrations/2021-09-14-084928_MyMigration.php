<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MyMigration extends Migration
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
            'user_id'       => [
                'type'       => 'INT',
                'unsigned' => true,
                'constraint' => '33',
            ],
            'forum'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255'
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('forum');
    }

    public function down()
    {
        $this->forge->dropTable('forum');
    }
}
