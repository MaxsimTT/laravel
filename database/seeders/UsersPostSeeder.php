<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UsersPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_authors')->insert([
            [
                'name'  => 'Danila',
                'email' => 'danila@gmail.com',
            ],
            [
                'name'  => 'Maksim',
                'email' => 'max@gmail.com',
            ],
            [
                'name'  => 'Kseniya',
                'email' => 'ks@gmail.com',
            ],
            [
                'name'  => 'Anna',
                'email' => 'anna@gmail.com',
            ],
            [
                'name'  => 'Marina',
                'email' => 'marina@gmail.com',
            ],
            [
                'name'  => 'Zafar',
                'email' => 'zafar@gmail.com',
            ],
            [
                'name' => 'Elena',
                'email' => 'el@gmail.com',
            ],
            [
                'name'  => 'Arsik',
                'email' => 'ars@gmail.com',
            ],
            [
                'name'  => 'Yana',
                'email' => 'yana@gmail.com',
            ],            
        ]);
    }
}
