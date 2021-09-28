<?php

namespace App\Database\Migrations\migrations_belajar;

use CodeIgniter\Database\Migration;

class StdCourse extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'stdnt_course_id'          => [
                'type'           => 'INT',
                'constraint'     => 15,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'student_id'          => [
                'type'           => 'INT',
                'constraint'     => 15,
                'unsigned'       => true,
            ],
            'course_id'          => [
                'type'           => 'INT',
                'constraint'     => 15,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('stdnt_course_id', true);
        $this->forge->createTable('stdnt_course');
    }

    public function down()
    {
        $this->forge->dropTable('stdnt_course');
    }
}
