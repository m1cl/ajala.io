<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('posts')->insert([
        'title' => str_random(10),
        'body' => str_random(300),
        'slug' => str_random(10),
      ]);
    }
}
