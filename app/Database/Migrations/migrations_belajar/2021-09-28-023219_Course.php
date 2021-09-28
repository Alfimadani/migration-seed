<?php

namespace App\Database\Migrations\migrations_belajar;

use CodeIgniter\Database\Migration;

class Course extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'course_id'          => [
                'type'           => 'INT',
                'constraint'     => 15,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'course'       => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],

        ]);
        $this->forge->addKey('course_id', true);
        $this->forge->createTable('course_name');
    }

    public function down()
    {
        $this->forge->dropTable('course_name');
    }
}
