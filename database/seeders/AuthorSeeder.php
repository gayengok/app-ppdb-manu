<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsSeeder extends Seeder
{
    public function run()
    {
        DB::table('authors')->insert([
            [
                'name' => 'John Doe',
            ],
            [
                'name' => 'Jane Smith',
            ],
        ]);
    }
}
