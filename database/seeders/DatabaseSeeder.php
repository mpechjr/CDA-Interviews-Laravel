<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('pages')->insert([
            'id' => 1,
            'title' => Str::random(10),
            'email_1' => Str::random(10).'@gmail.com',
            'content' => Str::random(200),
            'meta_title_1' => Str::random(15),
            'meta_title_2' => Str::random(15),
            'meta_description_1' => Str::random(25),
            
            'meta_description_2' => Str::random(25),
        ]);
    }
}
