<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class PostSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('posts')->insert([
            'title' => '',
            'slug' => '',
            'content' => '',
            'access_level' => ['public', 'private', 'unlisted'],
            'thumbnail' => '',
        ]);
    }
}
