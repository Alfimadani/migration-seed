<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        $data = [
            'nama' => $faker->name(),
        ];
        // Using Query Builder
        $this->db->table('user')->insert($data);
    }
}
