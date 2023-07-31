<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class EmailSeeder extends Seeder
{
    public function run()
    {
        $data = [[
            'to' => 'desmond@gmail.com',
            'from'    => 'xavier.oyj1999@gmail.com',
            'title' => 'Hello World',
            'body' => 'This is a test message!',
        ],
        [
            'to' => 'rayson@gmail.com',
            'from'    => 'xavier.oyj1999@gmail.com',
            'title' => 'Good morning!',
            'body' => 'This is a test message too!',
        ]];

        // Using Query Builder
        $this->db->table('emails')->insertBatch($data);
    }
}
