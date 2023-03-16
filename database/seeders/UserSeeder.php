<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'name' => 'test',
                    'email' => 'test@test.com',
                    'password' => '12345Qwerty,,',
                ],
                [
                    'name' => 'test2',
                    'email' => 'tessst@test.com',
                    'password' => '12345Qwerty,,',
                ]
            ]
        );
    }
}
