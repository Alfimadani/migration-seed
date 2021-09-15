<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MySeeder extends Seeder
{
    public function run()
    {
        $data = [
            'nama' => 'darth',
        ];
        // Using Query Builder
        $this->db->table('user')->insert($data);
    }
}
