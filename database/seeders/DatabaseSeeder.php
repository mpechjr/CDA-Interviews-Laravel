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
            'name' => Str::random(10),
            'email_1' => Str::random(10).'@gmail.com',
            'content' => Str::random(200),
        ]);
    }
}
