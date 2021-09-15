<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MySeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'nama' => $faker->name(),
            ];
            // Using Query Builder
            $this->db->table('user')->insert($data);
        }
    }
}
