<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Student extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 5; $i++) {
            $data = [
                'name' => $faker->name(),
                'email'    => $faker->email()
            ];
            // Using Query Builder
            $this->db->table('student')->insert($data);
        }
    }
}
