<?php

namespace Database\Seeders;

use App\Models\Node;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
        Node::factory()->count(5)->create();
    }
}
