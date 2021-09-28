<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CourseName extends Seeder
{
    public function run()
    {
        $data = [
            [
                'course' => 'Dasar Pemograman'
            ], [
                'course' => 'Kalkus',
            ],

        ];
        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
