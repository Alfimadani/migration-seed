<?php

namespace App\Database\Migrations\migrations_belajar;

use CodeIgniter\Database\Migration;

class Attenddance extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'att_id'          => [
                'type'           => 'INT',
                'constraint'     => 15,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'student_id'       => [
                'type'       => 'INT',
                'constraint' => 30,
            ], 'course_id'       => [
                'type'       => 'INT',
                'constraint' => 30,
            ],

        ]);
        $this->forge->addKey('att_id', true);
        $this->forge->createTable('attendance');
    }

    public function down()
    {
        $this->forge->dropTable('attendance');
    }
}
