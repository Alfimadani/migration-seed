<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ForumSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 10; $i++) {
            $data = [
                'forum' => $faker->creditCardType(),
                'user_id' => $faker->unique()->randomDigit()
            ];
            // Using Query Builder
            $this->db->table('forum')->insert($data);
        }
    }
}
