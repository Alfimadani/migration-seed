<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StdntCourse extends Seeder
{
    public function run()
    {
        $data = [
            [
                'student_id' => 1,
                'course_id' => 1
            ],
            [
                'student_id' => 1,
                'course_id' => 2
            ],
            [
                'student_id' => 2,
                'course_id' => 2
            ],
            [
                'student_id' => 2,
                'course_id' => 1
            ],
            [
                'student_id' => 3,
                'course_id' => 1
            ],
            [
                'student_id' => 3,
                'course_id' => 2
            ],
            [
                'student_id' => 4,
                'course_id' => 1
            ],
            [
                'student_id' => 4,
                'course_id' => 2
            ],
            [
                'student_id' => 5,
                'course_id' => 1
            ],
            [
                'student_id' => 5,
                'course_id' => 2
            ],

        ];
        // Using Query Builder
        $this->db->table('stdnt_course')->insertBatch($data);
    }
}
