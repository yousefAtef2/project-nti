<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    public function run($user_id = null): void
    {
        DB::table('posts')->insert([
            [
                'title' => 'post one',
                'body' => 'content post one',
                'user_id' => $user_id,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
